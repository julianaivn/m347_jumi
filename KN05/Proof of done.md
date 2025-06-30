# A) Bind mounts
#### The comands i used for this part of the exercise was the following:
- ![ADirectoryChange](./Screenshots/ADirectoryChange.png)
- to go to the directory i created for this task
- ![AFileCreation](./Screenshots/AFileCreation.png)
- with this comand i created the file hello.sh and the content was Hellooooooooo
- ![ADockerCommand](./Screenshots/ADockerCommand.png)
- This commands makes docker to start a new container and open it in interactive mode with terminal,
  the conatiner's name is bindtest. Then it takes my windows folder C:\kn05-bind and mounts it into
  the container at the path /mnt. We use the image busybox and we start the container with shell (sh)
- ![ARunFile](./Screenshots/ARunFile.png)
- Then this runs the script hello.sh that’s in my folder C:\kn05-bind, but it's accessed inside the container at /mnt/hello.sh. Then i change it
  i change the file hello.sh manually and save it.
- ![A2ndRunFile](./Screenshots/A2ndRunFile.png)
- Once saved i just run this command again to run the file/display the content

- Note: i tried to screencast this process like 5 times but it always cut without saving the video just when i open the file to edit it. Therefore the video provided is the aftermath.
- IMPORTANT: Video provided in the screencast folder.
# B) Volumes
