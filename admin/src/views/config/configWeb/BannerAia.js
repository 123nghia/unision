import { Component } from "react";
import { Button } from "reactstrap";
import TextFieldGroup from "../../../views/Common/TextFieldGroup";

export default class BannerAia extends Component {
    SaveAllConfigWeb(value) {
        this.props.SaveAllConfigWeb(value);
    }
    setStateByName = (name, value) => {
        this.props.setStateByName(name, value);
      };
    onChangeImage=(e, name, name_link, name_show) =>{
        this.props.onChangeImage(e, name, name_link, name_show);
    }

  render() {
      
    return (
      <>
        <div class="text-center">
          <Button
            variant="contained"
            color="success"
            onClick={() => this.SaveAllConfigWeb("banner")}
          >
            Lưu thay đổi
          </Button>
        </div>
        <div class="mt-3">
          <h1>Banner Desktop( 1050 *300)</h1>
          <TextFieldGroup
            field="image"
            label="Hình ảnh"
            type={"file"}
            onChange={(e) => this.onChangeImage(
                e,
                "imageBannerDesktop",
                "imageBannerDesktop_link",
                "imageBannerDesktop_show"
              )}
            onClick={(e) => {e.target.value = null;this.setStateByName("imageBannerDesktop_show", "")}} 
   
          />
          <div class="text-center">
            <img
              alt=""
              style={{ width: "400px" }}
              height="auto"
              src={this.props.imageBannerDesktop}
            />
          </div>
          <TextFieldGroup
            field="hrefImageBannerDesktop"
            label="Đường dẫn"
            value={this.props.hrefImageBannerDesktop}
            placeholder=""
            type={"text"}
            className="mt-3"
            onChange={(e) => {
                this.setStateByName("hrefImageBannerDesktop", e.target.value);
              }}
            
          />
        </div>
        <hr />
        <div class="mt-3">
          <h1>Banner Mobile (600 *250)</h1>
          <TextFieldGroup
            field="image"
            label="Hình ảnh"
            type={"file"}
            onChange={(e) => {
              this.onChangeImage(
                e,
                "imageBannerMobile",
                "imageBannerMobile_link",
                "imageBannerMobile_show"
              );
            }}
            onClick={(e) => {e.target.value = null;this.setStateByName("imageBannerMobile_show", "")}} 

          
          />
          <div class="text-center">
            <img
              alt=""
              style={{ width: "400px" }}
              height="auto"
              src={this.props.imageBannerMobile}
            />
          </div>
          <TextFieldGroup
            field="hrefImageBannerMobile"
            label="Đường dẫn"
            value={this.props.hrefImageBannerMobile}
            placeholder=""
            type={"text"}
            className="mt-3"
            onChange={(e) => {
              this.setStateByName("hrefImageBannerMobile", e.target.value);
            }}
          />
        </div>

        <div class="mt-3">
          <h1> Hình ảnh trang chủ (352 *352)</h1>
          <TextFieldGroup
            field="image"
            label="Hình ảnh trang chủ"
            type={"file"}
            onChange={(e) => {
              this.onChangeImage(
                e,
                "imageHomepage",
                "imageHomepage_link",
                "imageHomepage_show"
              );
            }}
            onClick={(e) => {e.target.value = null;this.setStateByName("imageHomepage_show", "")}} 

          
          />
          <div class="text-center">
            <img
              alt=""
              style={{ width: "352px" }}
              height="auto"
              src={this.props.imageHomepage}
            />
          </div>
       
        </div>


      </>
    );
  }
}
