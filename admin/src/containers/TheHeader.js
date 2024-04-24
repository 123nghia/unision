import React, { useState } from 'react'
import { useSelector, useDispatch } from 'react-redux'
import {
  CHeader,
  CToggler,
  CHeaderBrand,
  CHeaderNav,
  CHeaderNavItem,
  CButton,
  CCarousel,
  CCarouselCaption,
  CCarouselControl,
  CCarouselIndicators,
  CCarouselInner,
  CCarouselItem,
} from '@coreui/react'
import CIcon from '@coreui/icons-react'

import {
  ModalHeader, ModalBody, ModalFooter, Modal,
} from 'reactstrap';

import slide1 from './../assets/img/slide1.png'
import soida from './../assets/img/SlideSoida.png'
import icon_soida from './../assets/img/soida.png'
import CSKH from './../assets/img/CSKH.png'

import {
  TheHeaderDropdown,
  // TheHeaderDropdownMssg,
  // TheHeaderDropdownNotif,
  // TheHeaderDropdownTasks
} from './index'

const TheHeader = () => {
  const [show, setShow] = useState(true);
  const [close, setClose] = useState(true);
  const dispatch = useDispatch()
  const sidebarShow = useSelector(state => state.sidebarShow)

  const toggleSidebar = () => {
    const val = [true, 'responsive'].includes(sidebarShow) ? false : 'responsive'
    dispatch({ type: 'set', sidebarShow: val })
  }

  const toggleSidebarMobile = () => {
    const val = [false, 'responsive'].includes(sidebarShow) ? true : 'responsive'
    dispatch({ type: 'set', sidebarShow: val })
  }

  return (
    <CHeader withSubheader>
       
      <CToggler
        inHeader
        className="ml-md-3 d-lg-none"
        onClick={toggleSidebarMobile}
      />
      <CToggler
        inHeader
        className="ml-3 d-md-down-none"
        onClick={toggleSidebar}
      />
  
   
      <CHeaderNav className="d-md-down-none mr-auto">
 
        <CHeaderNavItem className="px-3" >
          {/* {
            localStorage.getItem("type") == "0" || localStorage.getItem("type") == "1" ? "" :
              <CButton color="info" onClick={() => { setShow(true) }} style={{ color: '#ffffff' }}>Hướng dẫn người dùng</CButton>
          } */}

          
        </CHeaderNavItem>

     
      </CHeaderNav>

      <CHeaderNav className="px-3">
      <a className="btnRegister" href ="https://soida-api.placentor.com.vn/dangky" target ="_blank">Tạo tài Shop/NCC </a>
        {/* <TheHeaderDropdownNotif/>
        <TheHeaderDropdownTasks/>
        <TheHeaderDropdownMssg/> */}
        <TheHeaderDropdown />
      </CHeaderNav>
 
     
    </CHeader>
  )
}

export default TheHeader
