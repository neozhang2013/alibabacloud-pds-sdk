// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace Aliyun.SDK.Hosting.Client.Models
{
    /**
     * 获取文件上传URL
     */
    public class GetUploadUrlRequest : TeaModel {
        /// <summary>
        /// content_md5
        /// </summary>
        [NameInMap("content_md5")]
        [Validation(Required=false, MaxLength=32)]
        public string ContentMd5 { get; set; }

        /// <summary>
        /// drive_id
        /// </summary>
        [NameInMap("drive_id")]
        [Validation(Required=false, Pattern="[0-9]+")]
        public string DriveId { get; set; }

        /// <summary>
        /// file_id
        /// </summary>
        [NameInMap("file_id")]
        [Validation(Required=true, MaxLength=50, Pattern="[a-z0-9]{1,50}")]
        public string FileId { get; set; }

        /// <summary>
        /// upload_part_list
        /// </summary>
        [NameInMap("part_info_list")]
        [Validation(Required=false)]
        public List<UploadPartInfo> PartInfoList { get; set; }

        /// <summary>
        /// upload_id
        /// </summary>
        [NameInMap("upload_id")]
        [Validation(Required=true)]
        public string UploadId { get; set; }

    }

}
