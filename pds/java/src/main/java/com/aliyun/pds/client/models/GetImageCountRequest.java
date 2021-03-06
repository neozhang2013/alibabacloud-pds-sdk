// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.pds.client.models;

import com.aliyun.tea.*;

/**
 * Get photo count request
 */
public class GetImageCountRequest extends TeaModel {
    @NameInMap("headers")
    public java.util.Map<String, String> headers;

    // drive_id
    @NameInMap("drive_id")
    @Validation(required = true, pattern = "[0-9]+")
    public String driveId;

    public static GetImageCountRequest build(java.util.Map<String, ?> map) throws Exception {
        GetImageCountRequest self = new GetImageCountRequest();
        return TeaModel.build(map, self);
    }

    public GetImageCountRequest setHeaders(java.util.Map<String, String> headers) {
        this.headers = headers;
        return this;
    }
    public java.util.Map<String, String> getHeaders() {
        return this.headers;
    }

    public GetImageCountRequest setDriveId(String driveId) {
        this.driveId = driveId;
        return this;
    }
    public String getDriveId() {
        return this.driveId;
    }

}
