@echo off

REM This file assumes 7-Zip is in PATH.

7z.exe a -tzip "..\WP_THEME-1.zip" .\* -r -x!*.bat -x!.\.vscode\ -x!.\.git\ -x!.\.gitignore

