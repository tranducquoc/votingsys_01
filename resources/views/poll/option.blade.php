<fieldset>
    <h2 className="fs-title">Tùy chọn</h2>
    <div className="switch-button">
        <div className="checkbox">
            <input type="checkbox"
                    data-toggle="toggle"
                    data-onstyle="info">
                    Cho phép người tham gia thêm tùy chọn mới
            </input>
        </div>
        <div className="checkbox">
            <input type="checkbox"
                    data-toggle="toggle"
                    data-onstyle="info">
                    Cho phép chỉnh sửa tùy chọn
            </input>
        </div>
    </div>
    <div className="setting">
        <div className='input-group date' id='datetimepicker1'>
            <input type='text' className="form-control" />
            <span className="input-group-addon">
                <span className="glyphicon glyphicon-calendar"></span>
            </span>
            <button className="btn btn-danger btn-remove-option" type="button">
                <span className="glyphicon glyphicon-trash"></span>
            </button>
        </div>
        <div className="add-button">
            <div className="fa fa-plus rotate option-button"></div>
        </div>
        <div className="hidden-button">
            <div className="fa fa-file-image-o option-button"></div>
            <div className="fa fa-pencil option-button"></div>
        </div>
        <div className="clear"></div>
    </div>
    <button name="previous" className="previous action-button" type="button">Previous</button>
    <button name="next" className="next action-button" type="button">Next</button>
</fieldset>
