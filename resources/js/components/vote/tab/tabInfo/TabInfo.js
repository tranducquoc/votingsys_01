import React, { Component } from "react";
import { Link } from "react-router-dom";

class TabInfo extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <React.Fragment>
                <div className={this.props.tab == 2 ? "tabs-stage-div active-block" : "tabs-stage-div tab-none"}>
                    <p className="tab-voting-title">title here</p>
                    <p className="tab-voting-descrip">description here</p>
                    <p className="poll-info-not-xs">
                        <span className="span-info">
                            <i className="fa fa-clock-o" aria-hidden="true"></i> 2019-03-18 16:20:40
                                </span>
                        <span>
                            <i className="fa fa-user" aria-hidden="true"></i>
                            <label className="label-poll-info">Pham Xuan Nam</label>
                        </span>
                        <span className="span-location-poll" tooltip="Đà Nẵng, Hải Châu, Việt Nam">
                            <i className="fa fa-map-marker" aria-hidden="true"></i>
                            Đà Nẵng, Hải Châu, Đ...
                        </span>
                    </p>
                </div>
            </React.Fragment>
        );
    }
}
export default TabInfo;
