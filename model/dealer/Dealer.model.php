<?php
/* Generated by neoan3-cli */

namespace Neoan3\Model;


use Neoan3\Apps\Db;

class DealerModel extends IndexModel
{


    static function find($zip)
    {
        return Db::easy('dealer.*', ['postal_code' => $zip]);
    }

}
