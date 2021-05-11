# Copyright (c) Facebook, Inc. and its affiliates.
import argparse
import multiprocessing as mp
import time
import cv2

from detectron2.config import get_cfg
from detectron2.data.detection_utils import read_image
from detectron2.utils.logger import setup_logger

from .predictor import VisualizationDemo

# constants
WINDOW_NAME = "COCO detections"


def setup_cfg(args):
    # load config from file and command-line arguments
    cfg = get_cfg()
    # To use demo for Panoptic-DeepLab, please uncomment the following two lines.
    # from detectron2.projects.panoptic_deeplab import add_panoptic_deeplab_config  # noqa
    # add_panoptic_deeplab_config(cfg)
    cfg.merge_from_file(args.config_file)
    cfg.merge_from_list(args.opts)
    # Set score_threshold for builtin models
    cfg.MODEL.RETINANET.SCORE_THRESH_TEST = args.confidence_threshold
    cfg.MODEL.ROI_HEADS.SCORE_THRESH_TEST = args.confidence_threshold
    cfg.MODEL.PANOPTIC_FPN.COMBINE.INSTANCES_CONFIDENCE_THRESH = args.confidence_threshold
    cfg.freeze()
    return cfg


def get_parser():
    parser = argparse.ArgumentParser(description="Detectron2 demo for builtin configs")
    parser.add_argument(
        "--config-file",
        default="configs/quick_schedules/mask_rcnn_R_50_FPN_inference_acc_test.yaml",
        metavar="FILE",
        help="path to config file",
    )
    parser.add_argument("--webcam", action="store_true", help="Take inputs from webcam.")
    parser.add_argument("--video-input", help="Path to video file.")
    parser.add_argument(
        "--input",
        nargs="+",
        help="A list of space separated input images; "
        "or a single glob pattern such as 'directory/*.jpg'",
    )
    parser.add_argument(
        "--output",
        help="A file or directory to save output visualizations. "
        "If not given, will show output in an OpenCV window.",
    )

    parser.add_argument(
        "--confidence-threshold",
        type=float,
        default=0.5,
        help="Minimum score for instance predictions to be shown",
    )
    parser.add_argument(
        "--opts",
        help="Modify config options using the command-line 'KEY VALUE' pairs",
        default=[],
        nargs=argparse.REMAINDER,
    )
    return parser


if __name__ == "__main__":
    # mp.set_start_method("spawn", force=True)
    args = get_parser().parse_args()
    args.config_file = "buoy.yml"

    # setup_logger(name="fvcore")
    # logger = setup_logger()
    # logger.info("Arguments: " + str(args))
    from detectron2.data.datasets import register_coco_instances
    register_coco_instances("buoy_dataset_valid", {"thing_classes": ["_background_", "buoy"]}, "/mnt/d/Dataset/valid_cocobuoy/annotations.json",
                            "/mnt/d/Dataset/valid_cocobuoy")

    cfg = setup_cfg(args)

    filepath = "/mnt/d/Dataset/png_buoy/buoy (2138).png"

    demo = VisualizationDemo(cfg)

    # use PIL, to be consistent with evaluation
    # img = read_image(filepath, format="BGR")
    from PIL import Image
    from detectron2.data.detection_utils import _apply_exif_orientation, convert_PIL_to_numpy
    with open(filepath, "rb") as f:
        image = Image.open(f)

    # work around this bug: https://github.com/python-pillow/Pillow/issues/3973
        image = _apply_exif_orientation(image)
        img = convert_PIL_to_numpy(image, "BGR")

    start_time = time.time()
    predictions, visualized_output = demo.run_on_image(img)
    print(predictions)
    # logger.info(
    #     "{}: {} in {:.2f}s".format(
    #         filepath,
    #         "detected {} instances".format(len(predictions["instances"]))
    #         if "instances" in predictions
    #         else "finished",
    #         time.time() - start_time,
    #     )
    # )

    # cv2.namedWindow(WINDOW_NAME, cv2.WINDOW_NORMAL)
    # cv2.imshow(WINDOW_NAME, visualized_output.get_image()[:, :, ::-1])
    # while cv2.waitKey(0) == 27:
    #     break  # esc to quit