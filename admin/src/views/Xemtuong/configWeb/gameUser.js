import { Component } from "react";
import TextFieldGroup from "../../Common/TextFieldGroup";
import { Button } from "reactstrap";
import IframeModal from '../../components/Iframe';
import CIcon from '@coreui/icons-react';
import {
  CButton
} from '@coreui/react'
import {
    CTextarea,
  } from "@coreui/react";
  export default class GameUser extends Component {
   
  SaveAllConfigWeb() {
    this.props.SaveAllConfigWeb();
  }
  setStateByName = (name, value) => {
    this.props.setStateByName(name, value);
  };
  onChangeImage=(e, name, name_link, name_show) =>{
    this.props.onChangeImage(e, name, name_link, name_show);
}


viewHistory = (e) => {

  window.open("/#/lich-su-ca-nhan/"+ e, "_blank");

}
  render() {
    return (
      <>
      
        <table  className="table table-hover table-outline mb-0  d-sm-table">
                  <thead className="thead-light">
                        <tr>
                            <th className="text-center">STT.</th>
                            <th className="text-center">Ngày đăng ký</th>
                            <th className="text-center">Họ và tên</th>
                            <th className="text-center">Số điện thoại</th>
                            
                            <th className="text-center">Hoạt động</th>
                        
                        </tr>
                  </thead>
                  <tbody>
           
                   
                    {
                      this.props.GameData != undefined ?
                      this.props.GameData.map((item, i) => {
                      return (
                             <tr key={i}>
                              <td className="text-center">{i+1}</td>
                              <td className="text-center">
                                          <p>{(new Date(item.create_date)).toLocaleDateString()} {(new Date(item.create_date)).toLocaleTimeString()} </p>
                                            
                                    </td>
                              <td className="text-center">{item.name}</td>
                                   <td className="text-center">{item.phone}</td>
                                 
                                  
                                    <td className="text-center">Hoạt động</td>
                                   


                              </tr>
                          );
                        }) : ""
                    }
                  </tbody>

               
        </table>
      
   
      </>
    );
  }
}
