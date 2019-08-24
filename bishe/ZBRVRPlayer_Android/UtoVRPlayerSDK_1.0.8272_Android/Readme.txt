UtoVR Player SDK for Android开发包：


*****************************************
更新：
版本：1.0.8272
发布时间：2017-11-30
1，解决偶尔异常的问题；
2，升级sdk内核，更为稳定；

版本：1.0.5513
发布时间：2016-12-19
1，解决偶尔异常的问题；


版本：1.0.3965
发布时间：2016-8-23

版本修改：
1，解决偶尔出现绿屏现象；
2，添加UVToolVisibilityListener监听，当工具栏交给播放器时，可监听工具栏的显示隐藏，来控制其他自动以控件的状态；
如果工具栏不交给播放器，可当做OnClick监听。
3，针对6.0手机优化。


*****************************************
更新：

版本：1.0.1798
发布时间：2016-3-31

版本修改：
1，修复了通过第三方应用关联正在运行中的“UtoVR Player SDK-应用”时出现的视口改变异常；
2，添加网络状态切换监听，UVNetworkListenser


*****************************************
版本：1.0.1065
发布时间：2016-1-26

实现播放器基本功能

*****************************************

简介：

UtoVR Player是一款全景视频播放器。它支持360度空间全景视频的播放。观看者通过与播放器的交互，可以体验到身临其境的视觉效果。UtoVR Player SDK可以帮助你在自己的应用中，快速实现全景视频的播放效果。

*****************************************

功能：

1，支持视频格式：h264编码的mp4等视频文件；
2，支持播放普通全景视频（2：1）；
3，支持2K高清、4K超高清（本地）的全景视频播放；
4，支持点播（mp4、HLS）、直播（HLS格式）播放全景视频；
5，支持手指的上、下、左、右的滑动，放大、缩小全景视频的操作；
6，支持陀螺仪的上、下、左、右控制全景视频的操作；
7，支持单屏/双屏（VR模式）的操作；
8，支持全屏、非全屏的操作；
9，支持视频的播放、暂停、以及时间进度条的控制；

注：免费版本的SDK不支持直播功能，并且UI画面的左下角带有"@2016 UtoVR - SDK"的信息，具体免费版本和定制版本的功能区别请参见官网。

*****************************************

包含内容：

1，doc：文档，主要是SDK API接口说明，可以双击运行“UtoVRAPI文档.html”，然后双击UVMediaPlayer --> 详细说明。

2，lib：SDK所需的文件，如果开发者重新建立工程或将UtoVR播放器集成到自己工程，请将该目录下所有文件拷贝到工程对应目录下。

3，sample：UtoVRPlayerDemo,Demo程序，演示了如何使用UtoVR全景播放器SDK。开发环境Android Studio 1.5.1，如果Android Studio版本比较低需要更新一下插件。

*****************************************

开发环境准备：

1，开发工具
Android开发工具很多，在这我们推荐各位开发者使用Eclipse和Android Studio作为自己的开发工具。下面我们将分别针对Eclipse和Android Studio介绍一下UtoVR Player SDK的工程配置方法。

Eclipse工程配置方法
第一步：在工程里新建libs文件夹，将开发包里libs目录下的所有文件和目录拷贝到libs根目录下，拷贝完成后的工程目录如下图所示；
libs
│  utovr_player_1.0.1065.jar
│  
├─arm64-v8a
│      libjniUtoVR.so
│      
├─armeabi
│      libjniUtoVR.so
│      
├─armeabi-v7a
│      libjniUtoVR.so
│      
├─mips
│      libjniUtoVR.so
│      
├─mips64
│      libjniUtoVR.so
│      
├─x86
│      libjniUtoVR.so
│      
└─x86_64
        libjniUtoVR.so

第二步：在工程属性->Java Build Path->Libraries中选择“Add External JARs”，选定utovr_player_X.X.X.jar，确定后返回。
第三步：将开发包里res目录下的所有文件和目录拷贝到res根目录下，拷贝完成后的工程目录如下图所示；
res
├─anim
│      loading.xml
│      
├─drawable-hdpi
│      loading_1.png
│      loading_10.png
│      loading_11.png
│      loading_12.png
│      loading_2.png
│      loading_3.png
│      loading_4.png
│      loading_5.png
│      loading_6.png
│      loading_7.png
│      loading_8.png
│      loading_9.png
│      
├─drawable-xhdpi
│      loading_1.png
│      loading_10.png
│      loading_11.png
│      loading_12.png
│      loading_2.png
│      loading_3.png
│      loading_4.png
│      loading_5.png
│      loading_6.png
│      loading_7.png
│      loading_8.png
│      loading_9.png
│      
└─values
        ids.xml
第四步：修改AndroidManifest.xml文件，在里面加入：
    <uses-feature android:glEsVersion="0x00020000" android:required="true" />
    <uses-permission android:name="android.permission.WRITE_EXTERNAL_STORAGE" />
    <uses-permission android:name="android.permission.READ_EXTERNAL_STORAGE" />
    <uses-permission android:name="android.permission.INTERNET" />
    <uses-permission android:name="android.permission.WAKE_LOCK" />
    <uses-permission android:name="android.permission.ACCESS_WIFI_STATE" />
    <uses-permission android:name="android.permission.READ_PHONE_STATE" />

通过以上四步操作后，您就可以正常使用UtoVR Player SDK为您提供的全部功能了。


Android Studio工程配置方法
推荐用Android Studio 1.5.1版本及以上
第一步：在工程app/libs目录下放入utovr_player_X.X.X.jar包以及so文件如下图所示。
libs
│  utovr_player_1.0.1065.jar
│  
├─arm64-v8a
│      libjniUtoVR.so
│      
├─armeabi
│      libjniUtoVR.so
│      
├─armeabi-v7a
│      libjniUtoVR.so
│      
├─mips
│      libjniUtoVR.so
│      
├─mips64
│      libjniUtoVR.so
│      
├─x86
│      libjniUtoVR.so
│      
└─x86_64
        libjniUtoVR.so

第二步：导入jar包。菜单栏选择File->Project Structor->Modules->Dependencies,点击+号，选择File dependency，选择jar包导入。
第三步：将开发包里res目录下的所有文件和目录拷贝到res根目录下，拷贝完成后的工程目录如下图所示；
res
├─anim
│      loading.xml
│      
├─drawable-hdpi
│      loading_1.png
│      loading_10.png
│      loading_11.png
│      loading_12.png
│      loading_2.png
│      loading_3.png
│      loading_4.png
│      loading_5.png
│      loading_6.png
│      loading_7.png
│      loading_8.png
│      loading_9.png
│      
├─drawable-xhdpi
│      loading_1.png
│      loading_10.png
│      loading_11.png
│      loading_12.png
│      loading_2.png
│      loading_3.png
│      loading_4.png
│      loading_5.png
│      loading_6.png
│      loading_7.png
│      loading_8.png
│      loading_9.png
│      
└─values
        ids.xml
第四步：修改AndroidManifest.xml文件，在里面加入：
    <uses-feature android:glEsVersion="0x00020000" android:required="true" />
    <uses-permission android:name="android.permission.WRITE_EXTERNAL_STORAGE" />
    <uses-permission android:name="android.permission.READ_EXTERNAL_STORAGE" />
    <uses-permission android:name="android.permission.INTERNET" />
    <uses-permission android:name="android.permission.WAKE_LOCK" />
    <uses-permission android:name="android.permission.ACCESS_WIFI_STATE" />
    <uses-permission android:name="android.permission.READ_PHONE_STATE" />
    
通过以上四步操作后，您就可以正常使用UtoVR Player SDK为您提供的全部功能了。


2，应用混淆
集成UtoVR Player SDK的应用，在打包混淆的时候，需要注意与UtoVR Player SDK相关的方法不可被混淆。混淆方法如下：
  -dontwarn com.google.**
  -dontwarn android.media.**
  -keepattributes InnerClasses, Signature, *Annotation*
  -keep class com.utovr.** {*;}
  -keep class com.google.** {*;}
  -keep class android.media.** {*;}


3，运行环境
运行环境需求：Android 4.1（API level 16）及其以上版本

*****************************************

反馈：

官网：http://www.utovr.com
技术支持：support@utovr.com
bbs： http://bbs.utovr.com/forum.php?mod=forumdisplay&fid=49

真心希望收到各位的使用反馈。以便更好的服务于大家！


上海杰图软件技术有限公司
2016年1月