<?php

$fd = dio_open('/dev/cu.usbmodem1421', O_RDWR | O_NOCTTY | O_NONBLOCK);

dio_fcntl($fd, F_SETFL, O_SYNC);

dio_tcsetattr($fd, array(
  'baud' => 9600,
  'bits' => 8,
  'stop'  => 1,
  'parity' => 0
));

while (1) {

  $data = dio_read($fd, 256);

  if ($data) {
      echo $data;
  }
}

?>
