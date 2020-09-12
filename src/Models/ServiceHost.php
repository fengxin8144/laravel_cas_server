<?php
/**
 * Created by PhpStorm.
 * User: chenyihong
 * Date: 16/8/1
 * Time: 15:17
 */

namespace fengxin8144\CAS\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceHost
 * @package fengxin8144\CAS\Models
 *
 * @property integer $service_id
 * @property Service $service
 */
class ServiceHost extends Model
{
    protected $table = 'cas_service_hosts';
    public $timestamps = false;
    protected $fillable = ['host'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
