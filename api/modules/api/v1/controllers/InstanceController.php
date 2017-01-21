<?php

namespace api\modules\api\v1\controllers;

use yii\base\Module;
use api\modules\api\v1\services\InstanceInterface;

class InstanceController extends BaseController
{
    /**
     * @var string
     */
    public $modelClass = 'api\modules\api\v1\models\Instance';

    /**
     * @var InstanceInterface
     */
    protected $instanceService;

    /**
     * InstanceController constructor.
     *
     * @param string $id
     * @param Module $module
     * @param InstanceInterface $instanceService
     * @param array $config
     */
    public function __construct(
        $id,
        Module $module,
        InstanceInterface $instanceService,
        array $config = []
    )
    {
        $this->instanceService = $instanceService;
        parent::__construct($id, $module, $config);
    }
}
