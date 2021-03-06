// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.hosting.mode.models;

import com.aliyun.tea.*;

/**
 * Get drive request
 */
public class GetDriveRequest extends TeaModel {
    @NameInMap("headers")
    public java.util.Map<String, String> headers;

    // Drive ID
    @NameInMap("drive_id")
    @Validation(required = true)
    public String driveId;

    public static GetDriveRequest build(java.util.Map<String, ?> map) throws Exception {
        GetDriveRequest self = new GetDriveRequest();
        return TeaModel.build(map, self);
    }

    public GetDriveRequest setHeaders(java.util.Map<String, String> headers) {
        this.headers = headers;
        return this;
    }
    public java.util.Map<String, String> getHeaders() {
        return this.headers;
    }

    public GetDriveRequest setDriveId(String driveId) {
        this.driveId = driveId;
        return this;
    }
    public String getDriveId() {
        return this.driveId;
    }

}
