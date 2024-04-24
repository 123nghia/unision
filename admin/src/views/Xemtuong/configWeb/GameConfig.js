import { Component } from "react";
import moment from 'moment'
import TextFieldGroup from "../../Common/TextFieldGroup";
import { Button, FormGroup, Label,Input  } from "reactstrap";
import {
    CTextarea,
  } from "@coreui/react";
  import { Editor } from '@tinymce/tinymce-react';

export default class Seo extends Component {
  SaveAllConfigWeb() {
    this.props.SaveAllConfigWeb();
  }
  setStateByName = (name, value) => {
    this.props.setStateByName(name, value);
  };
  onChangeImage=(e, name, name_link, name_show) =>{
    this.props.onChangeImage(e, name, name_link, name_show);
}
getTimeConver = (datetime) => {
  if(datetime ==null )
          return '';
   return  moment(datetime).format('YYYY-MM-DD');

}
onChangeImage2(e) {

  let files = e.target.files;
  let reader = new FileReader();
  reader.readAsDataURL(files[0])
  reader.onload = (e) => {
  
    this.setStateByName( "image", e.target.result );

  }
}

  render() {
    
    return (
      <>
        <div className="text-center">
          <Button
            variant="contained"
            color="success"
            onClick={() => this.SaveAllConfigWeb()}
          >
            Cập nhật
          </Button>
        </div>
        <FormGroup>
    <Label for="exampleSelect">
      Bật/ tắt game
    </Label>
    <Input
      id="exampleSelect"
      name="status"
      value={this.props.status}
      onChange={(e) => {
        this.setStateByName( "status", e.target.value );
      }}
      type="select"
    >
      <option value = "1" >
         Bật
      </option>
      <option value ="0">
        Tắt
      </option>
     
    </Input>
  </FormGroup>

      <FormGroup>
          <Label >
          Tiêu đề đăng ký
          </Label>
          <Input
          
      name="title"
      placeholder="Đăng ký xem tướng online"
      type="Text"
      value ={this.props.title}
      onChange={(e) => {
        this.setStateByName( "title", e.target.value );
      }}
          />
      </FormGroup>
      <FormGroup>
      <Label>
       Tiêu đề phụ
      </Label>
      <Input
        value ={this.props.title2}
      name="title2"
      placeholder="Gói cơ bản là 99.000"
      type="Text"
    
      onChange={(e) => {
        this.setStateByName( "title2", e.target.value );
      }}
      />
      </FormGroup>
   
     
   
      <FormGroup>
      <Label>
       Thông điệp
      </Label>
      <Editor
      apiKey='dwc8maoixiis0u2n79limc01psrb6w61ot7omm3v7b4k8db4'
      init={{
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks  fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      }}
      value ={this.props.content}
      initialValue={this.props.content}
      onEditorChange={(value)=>{ this.props.setStateByName("content", value)}}
    />
      </FormGroup>
          
      <FormGroup>
    <Label >
      Nút đăng ký/đăng nhập
    </Label>
    <Input
      name ="buttonText"
      placeholder=" Đăng ký/ Đăng nhập"
      type="text"
      value ={this.props.buttonText}
     
      onChange={(e) => {
        this.setStateByName( "buttonText", e.target.value );
      }}
    />
  </FormGroup>
     



  <FormGroup>
  <TextFieldGroup
                field="image"
                label="Hình ảnh xem tướng"
                type={"file"}
                strongText = " (800 *150)"
              
                onChange={e => { this.onChangeImage2(e) }}
                onClick={(e) => { e.target.value = null }}
            
              />
            
            {
                this.props.image == "" ? "" :
                  <img width="800" height="200" src={this.props.image} style={{ marginBottom: 20 }} />
              }
  </FormGroup>
        </>
    );
  }
}
