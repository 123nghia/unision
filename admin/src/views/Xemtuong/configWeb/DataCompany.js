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
  export default class DataCompany extends Component {
   
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
                            <th className="text-center">Tên shop</th>
                            <th className="text-center">Số điện thoại</th>
                            
                            <th className="text-center">Hoạt động</th>
                        
                        </tr>
                  </thead>
                  <tbody>
           
                   
                    {
                      this.props.DataCompany != undefined ?
                      this.props.DataCompany.map((xemtuong, i) => {

                        var item = xemtuong.companyId;
                        var statusItem = "Đang tắt" ;
                        if( xemtuong.status =="1")
                        {
                          statusItem = "Đang bật";
                        }
                        if(item)
                        {

                        }
                        else 
                        {
                          return;
                        }
                      return (
                             <tr key={i}>
                              <td className="text-center">{i+1}</td>
                              <td className="text-center">
                                          <p>{(new Date(item.Create_Date)).toLocaleDateString()} {(new Date(item.Create_Date)).toLocaleTimeString()} </p>
                                            
                                    </td>
                               <td className="text-center">{item.Name}</td>
                                   <td className="text-center">{item.Phone}</td>
                                 
                                  
                                    <td className="text-center">{statusItem}</td>
                                   


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
