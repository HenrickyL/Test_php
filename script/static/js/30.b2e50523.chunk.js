(window.webpackJsonp=window.webpackJsonp||[]).push([[30],{206:function(e,t,a){"use strict";var n=a(3),o=a(4),r=a(6),s=a(5),l=a(7),i=a(0),c=a.n(i),m=a(21),u=a.n(m),p=a(207),d=a.n(p),g=function(e){function t(){return Object(n.a)(this,t),Object(r.a)(this,Object(s.a)(t).apply(this,arguments))}return Object(l.a)(t,e),Object(o.a)(t,[{key:"render",value:function(){var e=this;return c.a.createElement(c.a.Fragment,null,c.a.createElement("div",{className:"col-12 p-0 fixed",style:{zIndex:"9"}},c.a.createElement("div",{className:"block m-0"},c.a.createElement("div",{className:"block-content p-0"},c.a.createElement("div",{className:"input-group ".concat(this.props.boxshadow&&"search-box")},!this.props.disable_back_button&&c.a.createElement("div",{className:"input-group-prepend"},this.props.back_to_home&&c.a.createElement("button",{type:"button",className:"btn search-navs-btns",style:{position:"relative"},onClick:function(){setTimeout(function(){e.context.router.history.push("/")},200)}},c.a.createElement("i",{className:"si si-arrow-left"}),c.a.createElement(u.a,{duration:"500"})),this.props.goto_orders_page&&c.a.createElement("button",{type:"button",className:"btn search-navs-btns",style:{position:"relative"},onClick:function(){setTimeout(function(){e.context.router.history.push("/my-orders")},200)}},c.a.createElement("i",{className:"si si-arrow-left"}),c.a.createElement(u.a,{duration:"500"})),this.props.goto_accounts_page&&c.a.createElement("button",{type:"button",className:"btn search-navs-btns",style:{position:"relative"},onClick:function(){setTimeout(function(){e.context.router.history.push("/my-account")},200)}},c.a.createElement("i",{className:"si si-arrow-left"}),c.a.createElement(u.a,{duration:"500"})),!this.props.back_to_home&&!this.props.goto_orders_page&&!this.props.goto_accounts_page&&c.a.createElement("button",{type:"button",className:"btn search-navs-btns",style:{position:"relative"},onClick:function(){setTimeout(function(){e.context.router.history.goBack()},200)}},c.a.createElement("i",{className:"si si-arrow-left"}),c.a.createElement(u.a,{duration:"500"}))),c.a.createElement("p",{className:"form-control search-input"},this.props.logo&&c.a.createElement("img",{src:"/assets/img/logos/logo.png",alt:localStorage.getItem("storeName"),width:"120"}),this.props.has_title?c.a.createElement("span",{className:"nav-page-title"},this.props.title):null,this.props.has_delivery_icon&&c.a.createElement(d.a,{left:!0},c.a.createElement("img",{src:"/assets/img/various/delivery-bike.png",alt:this.props.title,className:"nav-page-title"}))),this.props.has_restaurant_info?c.a.createElement("div",{className:"fixed-restaurant-info hidden",ref:function(t){e.heading=t}},c.a.createElement("span",{className:"font-w700 fixedRestaurantName"},this.props.restaurant.name),c.a.createElement("br",null),c.a.createElement("span",{className:"font-w400 fixedRestaurantTime"},c.a.createElement("i",{className:"si si-clock"})," ",this.props.restaurant.delivery_time," ",localStorage.getItem("homePageMinsText"))):null,c.a.createElement("div",{className:"input-group-append"},!this.props.disable_search&&c.a.createElement("button",{type:"submit",className:"btn search-navs-btns",style:{position:"relative"}},c.a.createElement("i",{className:"si si-magnifier"}),c.a.createElement(u.a,{duration:"500"}))))))))}}]),t}(i.Component);g.contextTypes={router:function(){return null}},t.a=g},330:function(e,t,a){"use strict";a.r(t);var n=a(3),o=a(4),r=a(6),s=a(5),l=a(7),i=a(0),c=a.n(i),m=a(333),u=a(16),p=a(38),d=a(206),g=a(93),h=a(213),f=a.n(h),b=a(21),E=a.n(b),N=function(e){function t(){return Object(n.a)(this,t),Object(r.a)(this,Object(s.a)(t).apply(this,arguments))}return Object(l.a)(t,e),Object(o.a)(t,[{key:"render",value:function(){var e=this.props,t=e.alert,a=e.handleNotificationClick,n=JSON.parse(t.data);return c.a.createElement(c.a.Fragment,null,c.a.createElement("div",{className:"row"},c.a.createElement("div",{className:"col-md-12"},c.a.createElement("div",{className:"block block-link-shadow mb-3 ".concat(t.is_read&&"bg-grey"),style:{boxShadow:t.is_read?"0":"rgba(225, 225, 225, 0.34) 0px 1px 4px 1px",opacity:t.is_read?"0.8":"1",pointerEvents:t.is_read?"none":"auto",borderRadius:"3px",position:"relative"},onClick:function(){return a(t)}},n.custom_image&&c.a.createElement("img",{src:n.custom_image,className:"img-fluid mb-2",alt:n.title,style:{filter:t.is_read?"grayscale(0.9)":"none"}}),c.a.createElement("div",{className:"block-content block-content-full clearfix py-2"},c.a.createElement("span",{className:"text-muted pull-right",style:{fontSize:"0.9rem"}},"true"===localStorage.getItem("showFromNowDate")?c.a.createElement(f.a,{fromNow:!0},t.created_at):c.a.createElement(f.a,{format:"DD/MM/YYYY hh:mma"},t.created_at)),c.a.createElement("div",null,c.a.createElement("div",{className:"font-w600 font-size-h4 mb-5 ".concat(t.is_read&&"text-muted")},n.title),c.a.createElement("div",{className:"font-size-sm text-muted"},n.is_wallet_alert&&"deposit"===n.transaction_type&&c.a.createElement("strong",{className:"text-success mr-2 font-size-sm"},localStorage.getItem("walletDepositText")),n.is_wallet_alert&&"withdraw"===n.transaction_type&&c.a.createElement("strong",{className:"text-danger mr-2 font-size-sm"},localStorage.getItem("walletWithdrawText")),n.message," "),!t.is_read&&c.a.createElement("div",{className:"alert-notify-bell"},c.a.createElement("i",{className:"si si-bell",style:{color:localStorage.getItem("storeColor")}})))),c.a.createElement(E.a,{duration:500,hasTouch:!1})))))}}]),t}(i.Component),v=a(111),y=function(e){function t(){var e,a;Object(n.a)(this,t);for(var o=arguments.length,l=new Array(o),i=0;i<o;i++)l[i]=arguments[i];return(a=Object(r.a)(this,(e=Object(s.a)(t)).call.apply(e,[this].concat(l)))).handleMarkAllRead=function(){var e=a.props.user;e.success&&a.props.markAllNotificationsRead(e.data.id,e.data.auth_token)},a.handleNotificationClick=function(e){var t=a.props.user;console.log("Notification Clicked"),t.success&&a.props.markOneNotificationRead(t.data.id,e.id,t.data.auth_token).then(function(t){var n=JSON.parse(e.data),o=n.unique_order_id,r=n.custom_notification,s=n.click_action,l=n.is_wallet_alert;o&&(console.log("Order tracking notification"),a.context.router.history.push("/running-order/".concat(o))),r&&s&&(console.log("Custom Notification"),window.location.href=s),l&&a.context.router.history.push("/my-wallet")})},a}return Object(l.a)(t,e),Object(o.a)(t,[{key:"componentDidMount",value:function(){this.props.alerts.length&&document.getElementsByTagName("body")[0].classList.add("bg-grey-light");var e=this.props.user;null!==localStorage.getItem("storeColor")&&e.success&&this.props.getUserNotifications(e.data.id,e.data.auth_token)}},{key:"componentWillUnmount",value:function(){document.getElementsByTagName("body")[0].classList.remove("bg-grey-light")}},{key:"render",value:function(){var e=this;if(window.innerWidth>768)return c.a.createElement(m.a,{to:"/"});if(null===localStorage.getItem("storeColor"))return c.a.createElement(m.a,{to:"/"});var t=this.props,a=t.user,n=t.alerts;return a.success?c.a.createElement(c.a.Fragment,null,c.a.createElement(p.a,{seotitle:localStorage.getItem("footerAlerts"),seodescription:localStorage.getItem("seoMetaDescription"),ogtype:"website",ogtitle:localStorage.getItem("seoOgTitle"),ogdescription:localStorage.getItem("seoOgDescription"),ogurl:window.location.href,twittertitle:localStorage.getItem("seoTwitterTitle"),twitterdescription:localStorage.getItem("seoTwitterDescription")}),c.a.createElement(d.a,{boxshadow:!0,has_title:!0,title:localStorage.getItem("footerAlerts"),disable_search:!0}),c.a.createElement("div",{className:"block-content block-content-full mb-100"},n.length?c.a.createElement(c.a.Fragment,null,c.a.createElement("button",{className:"btn btn-sm btn-clear-alerts float-right mt-50 mb-3",style:{position:"relative"},onClick:this.handleMarkAllRead},localStorage.getItem("markAllAlertReadText")," ",c.a.createElement("i",{className:"si si-check ml-1"}),c.a.createElement(E.a,{duration:500,hasTouch:!0})),c.a.createElement("div",{className:"clearfix"}),n.map(function(t){return c.a.createElement(c.a.Fragment,{key:t.id},c.a.createElement(N,{alert:t,handleNotificationClick:e.handleNotificationClick}))})):c.a.createElement("div",{className:"text-center mt-50 font-w600 text-muted pt-100"},c.a.createElement("div",{className:"pb-10"},c.a.createElement("i",{className:"si si-bell",style:{fontSize:"10rem",color:"#eee"}})),c.a.createElement("p",{style:{color:"#ccc"}},localStorage.getItem("noNewAlertsText")))),c.a.createElement(g.a,{active_alerts:!0})):c.a.createElement(m.a,{to:"/login"})}}]),t}(i.Component);y.contextTypes={router:function(){return null}};t.default=Object(u.b)(function(e){return{user:e.user.user,alerts:e.alert.alerts}},{getUserNotifications:v.a,markAllNotificationsRead:v.b,markOneNotificationRead:v.c})(y)}}]);