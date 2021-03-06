// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace Aliyun.SDK.PDS.Client.Models
{
    /**
     * 批量删除文件请求
     */
    public class DeleteFilesRequest : TeaModel {
        /// <summary>
        /// drive_id
        /// </summary>
        [NameInMap("drive_id")]
        [Validation(Required=true, Pattern="[0-9]+")]
        public string DriveId { get; set; }

        /// <summary>
        /// file_id_list
        /// </summary>
        [NameInMap("file_id_list")]
        [Validation(Required=true)]
        public List<string> FileIdList { get; set; }

    }

}
