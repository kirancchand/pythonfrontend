from PIL import Image
import face_recognition
import sys, json
import numpy as np
import array as arr

# Load the jpg file into a numpy array
image = face_recognition.load_image_file("/var/www/html/pythonfrontend/application/views/python/images/groupimage/stock_people.jpg")

#biden_image = face_recognition.load_image_file("images/img4.jpg")
#obama_image = face_recognition.load_image_file("images/img5.jpg")
unknown_image = face_recognition.load_image_file("/var/www/html/pythonfrontend/application/views/python/images/checkimage/check5.jpg")

# Find all the faces in the image using the default HOG-based model.
# This method is fairly accurate, but not as accurate as the CNN model and not GPU accelerated.
# See also: find_faces_in_picture_cnn.py
face_locations = face_recognition.face_locations(image)

#print("I found {} face(s) in this photograph.".format(len(face_locations)))
data = []
#print data
for i,face_location in enumerate(face_locations):

    # Print the location of each face in this image
    top, right, bottom, left = face_location
    #print("A face is located at pixel location Top: {}, Left: {}, Bottom: {}, Right: {}".format(top, left, bottom, right))
    k=i+1
    #print(k)
    name='img%d' % k
    #print(name)
    # You can access the actual face itself like this:
    face_image = image[top:bottom, left:right]
    pil_image = Image.fromarray(face_image)
    pil_image.save("/var/www/html/pythonfrontend/application/views/python/images/singleimage/"+name+".jpg","jpeg")

    #pil_image.show()
#try:
    #biden_face_encoding = face_recognition.face_encodings(biden_image)[0]
    
    obama_image = face_recognition.load_image_file("/var/www/html/pythonfrontend/application/views/python/images/singleimage/"+name+".jpg")
    obama_face_encoding = face_recognition.face_encodings(obama_image)[0]
    unknown_face_encoding = face_recognition.face_encodings(unknown_image)[0]
#except IndexError:
    #print("I wasn't able to locate any faces in at least one of the images. Check the image files. Aborting...")
    #quit()

    known_faces = [
    #biden_face_encoding,
    obama_face_encoding
    ]
    results = face_recognition.compare_faces(known_faces, unknown_face_encoding)
    #print("Is the unknown face a picture of Obama? {}".format(results[0]))
    data.append(results) 
    """if results=='true':
        #data.append(1) 
        print results
    else:
        #data.append(0) 
        print results"""

print data
# results is an array of True/False telling if the unknown face matched anyone in the known_faces array


#print("Is the unknown face a picture of Biden? {}".format(results[0]))
#print("Is the unknown face a picture of Obama? {}".format(results[0]))
#print("Is the unknown face a new person that we've never seen before? {}".format(not True in results))


