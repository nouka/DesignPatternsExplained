<?php
/**
 * switchを用いてデバイスドライバを決定する.
 */
class ApControl
{
    public function doDraw()
    {
        switch (RESOLUSION) {
            case LOW:
                // LRDDを使用する
                break;
            case HIGH:
                // HRDDを使用する
                break;
        }
    }

    public function doPrint()
    {
        switch (RESOLUSION) {
            case LOW:
                // LRPDを使用する
                break;
            case HIGH:
                // HRPDを使用する
                break;
        }
    }
}
