<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\PDS\SDK\Models;

use AlibabaCloud\Tea\Model;

/**
 * Create file response.
 */
class OSSCreateFileResponse extends Model
{
    /**
     * @description domain_id
     *
     * @example domain
     *
     * @var string
     */
    public $domainId;

    /**
     * @description drive_id
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description file_path
     *
     * @example /a/b/c.jpg
     *
     * @var string
     */
    public $filePath;

    /**
     * @description part_info_list
     *
     * @example [
     *
     * @var UploadPartInfo[]
     */
    public $partInfoList;

    /**
     * @description share_id
     *
     * @example 1
     *
     * @var string
     */
    public $shareId;

    /**
     * @description type
     *
     * @example file
     *
     * @var string
     */
    public $type;

    /**
     * @description upload_id
     *
     * @example C9DCFE5A82644AC7A02DB74C30C934A6
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'domainId'     => 'domain_id',
        'driveId'      => 'drive_id',
        'filePath'     => 'file_path',
        'partInfoList' => 'part_info_list',
        'shareId'      => 'share_id',
        'type'         => 'type',
        'uploadId'     => 'upload_id',
    ];

    public function validate()
    {
        Model::validateMaxLength('domainId', $this->domainId, 50);
        Model::validateMinLength('domainId', $this->domainId, 40);
        Model::validatePattern('domainId', $this->domainId, '[a-z0-9]{1,50}');
        Model::validatePattern('driveId', $this->driveId, '[0-9]+');
        Model::validatePattern('shareId', $this->shareId, '[0-9]+');
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->filePath) {
            $res['file_path'] = $this->filePath;
        }
        if (null !== $this->partInfoList) {
            $res['part_info_list'] = [];
            if (null !== $this->partInfoList && \is_array($this->partInfoList)) {
                $n = 0;
                foreach ($this->partInfoList as $item) {
                    $res['part_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSSCreateFileResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_path'])) {
            $model->filePath = $map['file_path'];
        }
        if (isset($map['part_info_list'])) {
            if (!empty($map['part_info_list'])) {
                $model->partInfoList = [];
                $n                   = 0;
                foreach ($map['part_info_list'] as $item) {
                    $model->partInfoList[$n++] = null !== $item ? UploadPartInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['upload_id'])) {
            $model->uploadId = $map['upload_id'];
        }

        return $model;
    }
}
