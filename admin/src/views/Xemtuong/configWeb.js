import React, { Component } from "react";
import List from "@mui/material/List";
import ListItemButton from "@mui/material/ListItemButton";
import ListItemIcon from "@mui/material/ListItemIcon";
import ListItemText from "@mui/material/ListItemText";
import "react-datepicker/dist/react-datepicker.css";
import Constants from "../../contants/contants";
import axios from "axios";
import { css } from "@emotion/react";
import DotLoader from "react-spinners/DotLoader";
import { IoLogoBuffer } from "@react-icons/all-files/io/IoLogoBuffer";
import BannerAia from "./configWeb/BannerAia";
import Logo from "./configWeb/GameConfig";
import Seo from "./configWeb/Content";
import DataGame from "./configWeb/gameUser";
import DataCompany from "./configWeb/DataCompany";

import { BiSlideshow } from "react-icons/bi";
import { MdOutlinePermDataSetting } from "react-icons/md";
import { BsChatDots } from "react-icons/bs";

import Swal from 'sweetalert2';
let headers = new Headers();
const auth = localStorage.getItem("auth");
headers.append("Authorization", "Bearer " + auth);
headers.append("Content-Type", "application/json");
class ConfigWeb extends Component {
  constructor(props) {
    super(props);

    var  tabmenus = [
      {
         _id: "4",
         name: "Cài đặt",
         icon: <IoLogoBuffer style={{ width: "24px ", height: "24px " }} />,
       },
      

       {
         _id: "12",
         name: "Danh sách shop tham gia",
         icon: <BiSlideshow style={{ width: "24px ", height: "24px " }} />,
       },
       {
         _id: "9",
         name: "Danh sách khách hàng đăng ký ",
         icon: <BiSlideshow style={{ width: "24px ", height: "24px " }} />,
       }
     
       
     ];

    if( localStorage.role != 'ADMIN')
    {
      tabmenus = [
        {
           _id: "4",
           name: "Cài đặt",
           icon: <IoLogoBuffer style={{ width: "24px ", height: "24px " }} />,
         },
        
         {
           _id: "9",
           name: "Danh sách khách hàng đăng ký ",
           icon: <BiSlideshow style={{ width: "24px ", height: "24px " }} />,
         }
       
         
       ];
    }
    this.state = {
      tabNameConfig:tabmenus,
      company_id: JSON.parse(localStorage.getItem("user")).company_id
        ? JSON.parse(localStorage.getItem("user")).company_id
        : null,
      poupintro: "",
      pupupSuccess: "",
      popupfail: "",
      fromDate: "",
      todate: "",
      fromtime: "",
      totime: "",
      skinNumber: "",
      dataGame:  [],
      GameData: [],
      allCompany: [],
      statusGame: "",
    };
  }

  ToggleViewConfigWeb(id) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    tablinks = document.getElementsByClassName("tablinks");
    
    const { tabNameConfig } = this.state;
    for (i = 0; i < tabNameConfig.length; i++) {
     
      if (tabNameConfig[i]._id === id) {
        tablinks[i].classList.add("tabcontent-left-active");
      } else {
        tablinks[i].classList.remove("tabcontent-left-active");
      }
    }
    for (i = 0; i < tabcontent.length; i++) {
      if (tabcontent[i].id.replace("tabcontent", "") === id) {
        tabcontent[i].classList.add("defaultOpen");
        tabcontent[i].style.animation = "hideOpa 1s ease-in-out";
      } else {
        tabcontent[i].classList.remove("defaultOpen");
        tabcontent[i].style.animation = "none";
      }
    }
  }
  onChangeImage = (e, value, valueLink, valueShow) => {
    let files = e.target.files;
    let reader = new FileReader();
    this.setState({ [valueLink]: files[0] });
    reader.readAsDataURL(files[0]);
    reader.onload = (e) => {
      this.setState({ [value]: e.target.result, [valueShow]: e.target.result });
    };
  };
  async componentDidMount() {
      await this.getDataConfigWeb();
      await this.getAllDataCustomer();
      await this.getAllCompany();
      
      this.ToggleViewConfigWeb("4");
  }

  async getDataConfigWeb() {
    var baseUrlapi = Constants.BASE_URL;
    let url = baseUrlapi + "/api/xemtuong/getInfoAdmin";
    const newComany_id = this.state.company_id;
    let Output_newComany_id;
    if (newComany_id) {
      Output_newComany_id = newComany_id;
    } else {
      Output_newComany_id = "-1";
    }
    await axios
      .get(url, {
        params: {
          gameType: "1",

          company_id: Output_newComany_id,
        },
      })
      .then((res) => {
        
        var data = res.data.data;
        if(data ==null)
        return;
        console.log(data);
        
           this.setState(
          {
            title: data.title,
            title2: data.title2,
            buttonText: data.buttonText,
            content: data.content,
            status: data.status,
            image: data.image
          },
          () => {

            console.log(this.state);
          }
        );
      });
  }
  async getAllDataCustomer() {
    var baseUrlapi = Constants.BASE_URL;
    let url = baseUrlapi + "/api/xemtuong/getAllCustomer";
    const newComany_id = this.state.company_id;
    let Output_newComany_id;
    if (newComany_id) {
      Output_newComany_id = newComany_id;
    } else {
      Output_newComany_id = "-1";
    }
    await axios
      .get(url, {
        params: {
        
          company_id: Output_newComany_id,
        },
      })
      .then((res) => {
    
        var data = res.data.data;
        if(data ==null)
        return;
        
        
           this.setState(
          {
            GameData: data
          },
          () => {

            console.log(this.state);
          }
        );
      });
  }

  async getAllCompany() {
    var baseUrlapi = Constants.BASE_URL;
    let url = baseUrlapi + "/api/xemtuong/getallCompany";
    const newComany_id = this.state.company_id;
    let Output_newComany_id;
    if (newComany_id) {
      Output_newComany_id = newComany_id;
    } else {
      Output_newComany_id = "-1";
    }
    await axios
      .get(url, {
        params: {
        
          company_id: Output_newComany_id,
        },
      })
      .then((res) => {
    
        var data = res.data.data;
        if(data ==null)
        return;
        
        
           this.setState(
          {
            allCompany: data
          },
          () => {

            console.log(this.state);
          }
        );
      });
  }

  SaveAllConfigWeb = async (change) => {


    var baseUrlapi = Constants.BASE_URL;
    let url = baseUrlapi + "/api/xemtuong/addorupdate";
    const newComany_id = this.state.company_id;
    let Output_newComany_id;
    if (newComany_id) {
      Output_newComany_id = newComany_id;
    } else {
      Output_newComany_id = "-1";
    }
  
    const bodyRequest = {
      gameType: "1",
      company_id: Output_newComany_id,
      title: this.state.title,
      title2: this.state.title2,
      buttonText: this.state.buttonText,
      content: this.state.content,
      status: this.state.status,
      image: this.state.image
      


};
    await axios
    .post(url,bodyRequest )
    .then((res) => {
             Swal.fire({
              title: 'thao tác thành công!',
              timer: 3000,    
            });
    });
 
  };

  setStateByName = (name, value) => {


    this.setState({ [name]: value });
  
  };

  render() {

    var roleUser = localStorage.role;

    if (!this.state.isLoading) {
      return (
        <div className="animated fadeIn">
          <div className="flex-tabs">
            <div className="tab">
              <List
                sx={{
                  width: "100%",
                  maxWidth: 360,
                  bgcolor: "background.paper",
                }}
                component="nav"
                aria-labelledby="nested-list-subheader"
              >
                {this.state.tabNameConfig
                  ? this.state.tabNameConfig.map((item, i) => {
                      return (
                        <ListItemButton
                          key={item._id}
                          className={
                            i === 0
                              ? " tablinks tabcontent-left-active"
                              : " tablinks"
                          }
                          onClick={() => this.ToggleViewConfigWeb(item._id)}
                          sx={{ pl: 4 }}
                        >
                          <ListItemIcon>{item.icon}</ListItemIcon>
                          <ListItemText
                            className="tabcontent-left"
                            style={{
                              fontSize: "14px !important",
                              color: "rgb(52, 71, 103)",
                            }}
                            primary={item.name}
                          />
                        </ListItemButton>
                      );
                    })
                  : null}
              </List>
            </div>
            <div className="tabcontents">
              <div id="tabcontent3" className="tabcontent">
               
              </div>

              {roleUser == "ADMIN"?  <div id="tabcontent12" className="tabcontent">
                <DataCompany
                    DataCompany={this.state.allCompany}
                
                
                  />
              </div>: <></>}

             

              <div id="tabcontent13" className="tabcontent">
              
              </div>

              <div id="tabcontent9" className="tabcontent">
              <DataGame
                  GameData={this.state.GameData}
              
               
                />
              </div>
              <div id="tabcontent4" className="tabcontent ">
                <Logo
                  SaveAllConfigWeb={this.SaveAllConfigWeb}
                  setStateByName={this.setStateByName}
                  title={this.state.title}
                  title2={this.state.title2}
                  status={this.state.status}
                  content={this.state.content}
                  buttonText={this.state.buttonText}
                  image = {this.state.image}
               
                />
              </div>
            </div>
          </div>
        </div>
      );
    }
    return (
      <div className="sweet-loading">
        <DotLoader
          css={override}
          size={50}
          color={"#123abc"}
          loading={this.state.isLoading}
          speedMultiplier={1.5}
        />
      </div>
    );
  }
}

const override = css`
  display: block;
  margin: 0 auto;
  border-color: red;
`;

export default ConfigWeb;
