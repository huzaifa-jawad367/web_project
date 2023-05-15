from deepface import DeepFace
import matplotlib.pyplot as plt
import os
import numpy as np
from PIL import Image, ImageDraw
import PIL

def detect_faces(image_path):

    detectors = ['opencv', 'ssd', 'dlib', 'mtcnn']
    img = DeepFace.extract_faces(img_path=image_path, detector_backend=detectors[3])

    return img

def pad_PIL_image1(image1):
    h, w = image1.size
    if h == w:
        return image1
    elif h > w:
        new_w = h
        left = 0
        top = int((new_w - w)/2)
        result = PIL.Image.new(image1.mode, (h, new_w), (0, 0, 0))
        result.paste(image1, (left, top))
        return result
    else:
        new_h = w
        left = int((new_h - h)/2)
        top = 0
        result = PIL.Image.new(image1.mode, (new_h, w), (0, 0, 0))
        result.paste(image1, (left, top))
        return result
    
def Preprocessing_pipeline(im_path, id):
    face = detect_faces(im_path)
    facial_area = face[0]['facial_area']
    img = Image.open(im_path)

    # # Draw the bounding box
    # draw = ImageDraw.Draw(img)
    # draw.rectangle((facial_area['x'], facial_area['y'], facial_area['x']+facial_area['w'], facial_area['y']+facial_area['h']), outline='red', width=3)

    image = img.crop(box=(facial_area['x'], facial_area['y'], facial_area['x']+facial_area['w'], facial_area['y']+facial_area['h']))
    image = pad_PIL_image1(image)
    image.save(f"storage\faces\{id}")