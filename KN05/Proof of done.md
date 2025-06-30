# A) Bind mounts
The comands i used for this part of the exercise was the following:
cd C:\kn05-bind //to go to the directory i created for this task
echo Hellooooooooo > hello.sh //with this comand i created the file hello.sh and the content was Hellooooooooo
docker run -it --name bindtest -v C:\kn05-bind:/mnt busybox sh //This commands makes docker to start a new container and open it in interactive mode with terminal,
                                                                  the conatiner's name is bindtest. Then it takes my windows folder C:\kn05-bind and mounts it into
                                                                  the container at the path /mnt. We use the image busybox and we start the container with shell (sh)
/mnt/hello.sh // Then this runs the script hello.sh that’s in my folder C:\kn05-bind, but it's accessed inside the container at /mnt/hello.sh. Then i change it
                i change the file hello.sh manually and save it, once saved i just run this command again to run the file/display the content

Note: i tried to screencast this process like 5 times but it always cut without saving the video just when i open the file to edit it. Therefore the video provided is the aftermath.
IMPORTANT: Video provided in the screencast folder.
# B) Volumes
