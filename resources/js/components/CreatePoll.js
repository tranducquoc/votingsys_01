import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class CreatePoll extends Component {
    constructor(props) {
      super(props);

      this.state = {
        name: '',
        email: '',
        title: '',
        multiple: 1,
        description: '',
        date_close: '',
        location: '',
      }

        this.handleChangeName = this.handleChangeName.bind(this)
        this.handleChangeEmail = this.handleChangeEmail.bind(this)
        this.handleChangeTitle = this.handleChangeTitle.bind(this)
        this.handleChangeMultiple = this.handleChangeMultiple.bind(this)
        this.handleChangeDescription = this.handleChangeDescription.bind(this)
        this.handleChangeDateClose = this.handleChangeDateClose.bind(this)
        this.handleChangeLocation = this.handleChangeLocation.bind(this)
        this.handleSubmit = this.handleSubmit.bind(this)
    }

    handleChangeName(e) {
        this.setState({
            name: e.target.value
        })
    }

    handleChangeEmail(e) {
        this.setState({
            email: e.target.value
        })
    }

    handleChangeTitle(e) {
        this.setState({
            title: e.target.value
        })
    }

    handleChangeMultiple(e) {
        this.setState({
            multiple: e.target.value
        })
    }

    handleChangeDescription(e) {
        this.setState({
            description: e.target.value
        })
    }

    handleChangeDateClose(e) {
        this.setState({
            date_close: e.target.value
        })
    }

    handleChangeLocation(e) {
        this.setState({
            location: e.target.value
        })
    }

    handleSubmit(e) {
        e.preventDefault()
        const url = window.Laravel.baseUrl + '/poll'
        const data = {
            name: this.state.name,
            email: this.state.email,
            title: this.state.title,
            multiple: this.state.multiple,
            description: this.state.description,
            date_close: this.state.date_close,
            location: this.state.location,
        }
        axios.post(url, data)
        .then(response => {
            console.log(response)
            this.props.history.push('/link-poll')
        })
        .catch(function (error) {
            console.log(error.response)
        })      
    }

    render() {
        return (
            <React.Fragment>
                <div className="body-form">
                    <form onSubmit={this.handleSubmit} id="msform">
                        <ul id="progressbar">
                            <li className="active" id="progress1">
                                <div></div>
                            </li>
                            <li id="progress2">
                                <div></div>
                            </li>
                            <li id="progress3">
                                <div></div>
                            </li>
                            <li id="progress4">
                                <div></div>
                            </li>
                        </ul>
                        <fieldset>
                            <h2 className="fs-title">Thông tin</h2>
                            <div className="input">
                                <span className="input-group-text">
                                    <i className="fa fa-user" aria-hidden="true"></i>
                                </span>
                                <input type="text" name="name"
                                        className="form-control input-inf"
                                        placeholder="Nhập tên bạn..."
                                        value={this.state.name}
                                        onChange={this.handleChangeName}
                                        aria-describedby="basic-addon1"/>
                            </div>
                            <div className="input">
                                <span className="input-group-text">
                                    <i className="fa fa-envelope"
                                        aria-hidden="true">
                                    </i>
                                </span>
                                <input type="text" name="email"
                                        className="form-control input-inf"
                                        placeholder="Nhập địa chỉ email của bạn..."
                                        value={this.state.email}
                                        onChange={this.handleChangeEmail}
                                        aria-describedby="basic-addon1"/>
                            </div>
                            <div className="input">
                                <span className="input-group-text">
                                    <i className="fa fa-text-width"
                                        aria-hidden="true">
                                    </i>
                                </span>
                                <input type="text" name="title"
                                        className="form-control input-inf"
                                        placeholder="Nhập tiêu đề poll..."
                                        value={this.state.title}
                                        onChange={this.handleChangeTitle}
                                        aria-describedby="basic-addon1"/>
                            </div>
                            <div className="input">
                                <select name="multiple" 
                                        className="form-control"
                                        value={this.state.multiple}
                                        onChange={this.handleChangeMultiple}>
                                    <option value="1">
                                        Một đáp án
                                    </option>
                                    <option value="2">
                                        Nhiều đáp án
                                    </option>
                                </select>
                            </div>
                            <textarea name="description"
                                        className="form-control input-textarea"
                                        rows="4"
                                        value={this.state.description}
                                        onChange={this.handleChangeDescription}
                                        placeholder="Nhập mô tả cho poll này...">
                            </textarea>
                            <div className="input">
                                <span className="input-group-text">
                                    <i className="fa fa-clock-o"
                                        aria-hidden="true">
                                    </i>
                                </span>
                                <div className='col-sm-6 datetime'>
                                    <input type="text"
                                            name="date_close"
                                            className="form-control datetime-input"
                                            id="datetimepicker4"
                                            value={this.state.date_close}
                                            onChange={this.handleChangeDateClose}
                                            placeholder="Chọn thời gian đóng bầu chọn của poll..."/>
                                </div>
                            </div>
                            <div className="input">
                                <span className="input-group-text">
                                    <i className="fa fa-map-marker"
                                        aria-hidden="true">
                                    </i>
                                </span>
                                <input type="text"
                                        name="location"
                                        className="form-control input-inf"
                                        value={this.state.location}
                                        onChange={this.handleChangeLocation}
                                        placeholder="Nhập vị trí..."
                                        aria-describedby="basic-addon1"
                                        id="pac-input"/>
                            </div>
                            <button name="next" className="next action-button" type="submit">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </React.Fragment>
        );
    }
}
