# Installation steps

In this guideline you will have a full steps instructions on how to install the required tools for our course.

- [Installation steps](#installation-steps)
  - [XAMPP](#xampp)
  - [Vscode Installation](#vscode-installation)
  - [Composer](#composer)
  - [Postman](#postman)
  - [Laravel](#laravel)
    - [Why Laravel?](#why-laravel)
      - [A Progressive Framework](#a-progressive-framework)
      - [A Scalable Framework](#a-scalable-framework)
      - [A Community Framework](#a-community-framework)
    - [How to install laravel?](#how-to-install-laravel)
  - [PhpStorm (optional)](#phpstorm-optional)

## XAMPP

* * *
 XAMPP is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and use.
 Follow these instructions in order to install XAMPP
  
  1. **Download**:
  download and install it from [here](https://www.apachefriends.org/xampp-files/8.0.10/xampp-windows-x64-8.0.10-0-VS16-installer.exe)
      \
      &nbsp;
  2. **Run .exe file**:
  Once the software bundle has been downloaded, you can start the installation by double-clicking on the file with the endin.exe
    \
    &nbsp;
  3. **Start the setup wizard**:
     \
      &nbsp;
      ![1](assets/XAMPP_01.jpg)
      \
      &nbsp;
  4. **Choose software components**:
      \
      &nbsp;
     ![2](assets/XAMPP_02.jpg)
     \
      &nbsp;
  5. **Choose the installation directory**:
     \
      &nbsp;
     ![3](assets/XAMPP_03.jpg)
     \
      &nbsp;
  6. **Start the installation process**:
      \
      &nbsp;
     ![4](assets/XAMPP_04.jpg)
     \
      &nbsp;
  7. **Complete installation**:
     \
      &nbsp;
     ![5](assets/XAMPP_05.jpg)

## Vscode Installation

* * *
  Visual Studio Code is a lightweight but powerful source code editor which runs on your desktop and is available for Windows, macOS, and Linux. It comes with built-in support for JavaScript, TypeScript, and Node.js and has a rich ecosystem of extensions for other languages (such as C++, C#, Java, Python, PHP, Go) and runtimes (such as .NET and Unity).
  
  1. **Download**:
      You can download and install it from [here](https://code.visualstudio.com/Download) and choose a version that satisfies your pc/ laptop hardware.
      \
      &nbsp;
      ![6](assets/vs_code_1.jpg).
      \
      &nbsp;

  2. **Run .exe file**:
      Once the software bundle has been downloaded, you can start the installation by double-clicking on the file with the ending .exe Now a dialogue box appears.
      Select I accept the agreement, Then select Next.
      \
      &nbsp;
      ![7](assets/vs_code_2.png)
      \
      &nbsp;
  3. **Hit next**:
      \
      &nbsp;
      ![8](assets/vs_code_3.png)
      \
      &nbsp;
  4. **Select the required options** select all options.
      \
      &nbsp;
      ![9](assets/vs_code_4.png)
      \
      &nbsp;
  5. **Hit Install**:
      \
      &nbsp;
      ![10](assets/vs_code_5.png)
      \
      &nbsp;
  6. **Start the installation process**:
      Wait a bit while it gets installed (The green color fills the bar).
      \
      &nbsp;
      ![11](assets/vs_code_6.png)
      \
      &nbsp;
  7. **Complete installation**:
     Click `Finish` to exit Setup. Uncheck in the check box.
     \
      &nbsp;
     ![12](assets/vs_code_7.png)
     \
      &nbsp;
  
## Composer

* * *
   Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.
   Composer is not a package manager in the same sense as Yum or Apt are. Yes, it deals with "packages" or libraries, but it manages them on a per-project basis, installing them in a directory (e.g. vendor) inside your project. By default, it does not install anything globally. Thus, it is a dependency manager. It does however support a "global" project for convenience via the global command.

- **Download and run** [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)-it will install the latest composer version whenever it is executed. just hit next.
\
&nbsp;
![13](assets/composer_1.png).
\
&nbsp;
- Now, **choose the command-line `PHP` path** you want to use, checkmark the box to add the PHP path, and click Next.
\
&nbsp;
![14](assets/composer_2.png)
\
&nbsp;
- Composer setup pop-up a screen that provides an option to use a `proxy` server to connect to the internet. If you want to use a proxy server, checkmark the box and enter the proxy URL; if not, leave it and click on the Next We are skipping this as we are not using any proxy server to connect internet.
\
&nbsp;
![15](assets/composer_3.png)
\
&nbsp;
- The Composer setup is ready to install on your computer; review your settings and click on the Install button.
\
&nbsp;
![16](assets/composer_4.png)
\
&nbsp;

## Postman

* * *
  Postman is an API platform for building and using APIs. Postman simplifies each step of the API lifecycle and streamlines collaboration so you can create better APIs—faster.
  In order to setup postman follow these instructions:

  1. **_Download_** postman from here for [win 64bit](https://dl.pstmn.io/download/latest/win64) or from here for [win 32bit](https://dl.pstmn.io/download/latest/win32)
   \
   &nbsp;
  2. **_Run_** the `installer` and wait for a few minutes
   \
   &nbsp;
  ![17](assets/postman1.png) .
  \
   &nbsp;
  3. **Once the installation completes**, you will be redirected to a window as shown in the image where you can click on Stop signing in and take me straight to the app (as this app can also be used without logging in) or otherwise you will get a new window to sign up.
  \
   &nbsp;
  ![18](assets/postman2.png)
  \
  &nbsp;

## Laravel

* * *
  Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.

  Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.

  Whether you are new to PHP or web frameworks or have years of experience, Laravel is a framework that can grow with you. We'll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can't wait to see what you build.

### Why Laravel?

  There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.

#### A Progressive Framework

  We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If you're just taking your first steps into web development, Laravel's vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.

  If you're a senior developer, Laravel gives you robust tools for dependency injection, unit testing, queues, real-time events, and more. Laravel is fine-tuned for building professional web applications and ready to handle enterprise workloads.

#### A Scalable Framework

  Laravel is incredibly scalable. Thanks to the scaling-friendly nature of PHP and Laravel's built-in support for fast, distributed cache systems like Redis, horizontal scaling with Laravel is a breeze. In fact, Laravel applications have been easily scaled to handle hundreds of millions of requests per month.

  Need extreme scaling? Platforms like Laravel Vapor allow you to run your Laravel application at a nearly limitless scale on AWS's latest serverless technology.

#### A Community Framework

  Laravel combines the best packages in the PHP ecosystem to offer the most robust and developer-friendly framework available. In addition, thousands of talented developers from around the world have contributed to the framework. Who knows, maybe you'll even become a Laravel contributor.

### How to install laravel?

- Open Command-Prompt as an administrator and run this command in order to install `laravel installer` as a global `composer` dependency:
  
  ```sh
    composer global require laravel/installer
  ```

- **Install vs code extensions**
  - Laravel Extension Pack is a collection of extensions for Laravel development.
    - first click on extensions manager(1) and in the search bar write `laravel`(2), finally choose `Laravel Extension Pack`  then click on install as shown below:
  \
  &nbsp;
  ![19](assets/lara1.png)


## PhpStorm (optional)

  `PhpStorm` is perfect for working with Symfony, Laravel, Drupal, WordPress, Zend Framework, Magento, Joomla!, CakePHP, Yii, and other frameworks.The editor actually 'gets' your code and deeply understands its structure, supporting all the PHP language features for modern and legacy projects. It provides the best code completion, refactorings, on-the-fly error prevention, and more.
  If you have a good pc/ laptop hardware you can download and install it insted of `Vs code`.
  [Download Link](https://www.jetbrains.com/phpstorm/download/#section=windows)

**Best Regards**
\
&nbsp;
**_Eng. Ali Ibrahim_**&nbsp; &nbsp; &nbsp;**_Eng. Azzam Habib_**
