import React, { Component } from "react";
import { Link } from "react-router-dom";

class TabResult extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <React.Fragment>
                <div className={this.props.tab == 3 ? "tabs-stage-div active-block" : "tabs-stage-div tab-none"}>
                    <p>tab Kết quả</p>
                </div>
            </React.Fragment>
        );
    }
}
export default TabResult;
