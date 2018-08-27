<?php 
// exec("ffmpeg -i /audio/nilamanal.mp3 -ab 64 /audio/nw.mp3");
echo shell_exec(" /usr/local/bin/ffmpeg -i test.mp3 -codec:a libmp3lame -b:a 64k out.mp3 2>&1");

?>
