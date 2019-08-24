说明：
1，libs：SDK的库文件（so和jar文件）。
tips:
 .so文件导入，在build文件中添加处理，请参照UtoVRPlayerDemo对应处理：build文件中
  task nativeLibsToJar以及tasks.withType(JavaCompile)
2，res：SDK所需的资源文件，包括values\ids.xml、anim\loading.xml、以及loading所需图片（drawable-hdpi和drawable-xhdpi两个目录下），开发者可以修改资源内容（anim\loading.xml的内容、drawable-hdpi和drawable-xhdpi两个目录下图片）但不可改变资源名称（values\ids.xml的文件名以及里面的load_icon、anim\loading.xml的文件名）

如果开发者重新建立工程或将UtoVR播放器集成到自己工程，请将该目录下所有文件拷贝到工程对应目录下。