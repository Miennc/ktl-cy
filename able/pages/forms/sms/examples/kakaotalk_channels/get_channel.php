<?php
/*
 * 채널정보 조회
 */
require_once("../../lib/message.php");

// 조회할 채널의 PFID 입력
$pfId = "KA01PF2207070159153606rCNRVBME4l";

print_r(request("GET", "/kakao/v1/plus-friends/{$pfId}"));
