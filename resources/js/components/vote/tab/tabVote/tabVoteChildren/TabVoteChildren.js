import React, { Component } from "react";
import autoBind from "react-autobind";
class FormInputInfo extends Component {
constructor(props) {
super(props);
autoBind(this);
}
render() {
return (
<React.Fragment>
    <div className="info-submit">
        <div className="col-lg-5 col-md-5 col-sm-5 col-xs-5 col-xs-name-vote name-vote-mobile">
            <div className="input-group  required">
                <span className="input-group-addon">
                <i className="fa fa-user" aria-hidden="true"></i>
                </span>
                <input className="form-control nameVote" placeholder="Nhập tên của bạn..." name="nameVote" type="text" />
            </div>
        </div>
        <div className="col-lg-5 col-md-5 col-sm-5 col-xs-5 col-xs-email-vote email-vote-mobile">
            <div className="input-group ">
                <span className="input-group-addon">
                <i className="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                </span>
                <input className="form-control emailVote" placeholder="Nhập địa chỉ email của bạn..." name="emailVote" type="email" />
            </div>
        </div>
        <div className="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-btn-xs-vote btn-vote-mobile">
            <span className="input-group-btn js-data-validate">
            <button className="btn btn-success btn-vote" type="button">Bầu chọn</button>
            </span>
        </div>
    </div>
</React.Fragment>
);
}
}
export default FormInputInfo;
