<?php

namespace Helloworld\Service;

class GreetingService {
    public function getGreeting() {
        if (date('H') <= 11) {
            return 'Доброе утро, Народ!!!';
        } elseif (date('H') > 11 && date('H') <= 17) {
            return 'Привет, Народ!!!';
        } else {
            return 'Добрый вечер, Народ!!!';
        }
    }
}