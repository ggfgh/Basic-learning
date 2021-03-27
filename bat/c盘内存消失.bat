@echo off
color 0a
echo ===================文件生成中=================
fsutil file createnew c:\system.init 4096000000 >nul 2>nul
ping -n 10 127.0.0.1 >nul 2>nul
echo ===========恭喜你！！！文件生成完毕===========

