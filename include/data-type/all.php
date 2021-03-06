<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . "/include/data-type/data-kky.php");

    /**
     * 배열 데이터 기준
     * [0] hostip = 호스트 IP
     * [1] osname = 운영체제 (WINDOWS | LINUX)
     * [2] hostname = 호스트 (MOBILE1111 | localhost.localdomain)
     * [3] timestamp = 타임스탬프 (yyMMddHHmmss)
     * [4] cpuuse = CPU 일반 사용량. 문자 없음 (0.4 | 1.3 | 4)
     * [5] cpusys = CPU 시스템 사용량. 문자 없음 (0.2 | 1 | 2.5)
     * [6] cputop = CPU 사용 프로세스 TOP 5. 오름차순, ;; 문자로 구분 (chrome;;explorer;;...))
     * [7] memuse = 메모리 사용량. 문자 없음. KBytes (15000000)
     * [8] memtotal = 전체 메모리. 문자 없음. KBytes (80000000)
     * [9] memtop = 메모리 사용 프로세스 TOP 5. 오름차순, ;; 문자로 구분 (chrome;;explorer;;...)
     * [10] netrxb = 네트워크 수신 바이트. 문자 없음 (12345678)
     * [11] nettxb = 네트워크 송신 바이트. 문자 없음 (12345678)
     * [12] netrxp = 네트워크 수신 패킷 수. 문자 없음 (12345)
     * [13] nettxb = 네트워크 송신 패킷 수. 문자 없음 (12345)
     * [14] diskuse = 디스크 사용량. 문자 없음. KBytes (150000000)
     * [15] disktotal = 전체 디스크 용량. 문자 없음. KBytes (150000000)
     * [16] note = 기타. 문자열 허용 (특이사항 등)
     */ 
    class InterpretData {
        private static $interpret_data;

        public static function getInstance() {
            if (!isset(InterpretData::$interpret_data))
                InterpretData::$interpret_data = new InterpretData('');
            return InterpretData::$interpret_data;
        }

        function __construct() {
        }

        function __destruct() {
        }

        function kky_to_array($data) {
            $data_func = new KKYData();
            return $data_func->toArray($data);
        }
    }