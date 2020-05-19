<?php

namespace Src;

class DefangIPaddr
{
    /**
     * @param String $address
     * @return String
     *
     * Constraints:
     * The given address is a valid IPv4 address.
     *
     * @source https://leetcode.com/problems/defanging-an-ip-address/
     */
    public function defangIPaddr($address)
    {
        $address = explode('.', $address);
        return implode('[.]', $address);
        /**
         * 較快解法
         * str_replace(".", "[.]", $address)
         */
    }
}
