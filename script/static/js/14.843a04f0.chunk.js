(window.webpackJsonp=window.webpackJsonp||[]).push([[14],{227:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(e,t){for(var a=0;a<t.length;a++){var n=t[a];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(t,a,n){return a&&e(t.prototype,a),n&&e(t,n),t}}(),s=a(0),r=l(s),i=l(a(1));function l(e){return e&&e.__esModule?e:{default:e}}var o=function(e){function t(e){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t);var a=function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!==typeof t&&"function"!==typeof t?e:t}(this,(t.__proto__||Object.getPrototypeOf(t)).call(this,e));return a.handleTriggerClick=a.handleTriggerClick.bind(a),a.handleTransitionEnd=a.handleTransitionEnd.bind(a),a.continueOpenCollapsible=a.continueOpenCollapsible.bind(a),a.setInnerRef=a.setInnerRef.bind(a),e.open?a.state={isClosed:!1,shouldSwitchAutoOnNextCycle:!1,height:"auto",transition:"none",hasBeenOpened:!0,overflow:e.overflowWhenOpen,inTransition:!1}:a.state={isClosed:!0,shouldSwitchAutoOnNextCycle:!1,height:0,transition:"height "+e.transitionTime+"ms "+e.easing,hasBeenOpened:!1,overflow:"hidden",inTransition:!1},a}return function(e,t){if("function"!==typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,s.Component),n(t,[{key:"componentDidUpdate",value:function(e,t){var a=this;this.state.shouldOpenOnNextCycle&&this.continueOpenCollapsible(),"auto"===t.height&&!0===this.state.shouldSwitchAutoOnNextCycle&&window.setTimeout(function(){a.setState({height:0,overflow:"hidden",isClosed:!0,shouldSwitchAutoOnNextCycle:!1})},50),e.open!==this.props.open&&(!0===this.props.open?(this.openCollapsible(),this.props.onOpening()):(this.closeCollapsible(),this.props.onClosing()))}},{key:"closeCollapsible",value:function(){this.setState({shouldSwitchAutoOnNextCycle:!0,height:this.innerRef.offsetHeight,transition:"height "+(this.props.transitionCloseTime?this.props.transitionCloseTime:this.props.transitionTime)+"ms "+this.props.easing,inTransition:!0})}},{key:"openCollapsible",value:function(){this.setState({inTransition:!0,shouldOpenOnNextCycle:!0})}},{key:"continueOpenCollapsible",value:function(){this.setState({height:this.innerRef.offsetHeight,transition:"height "+this.props.transitionTime+"ms "+this.props.easing,isClosed:!1,hasBeenOpened:!0,inTransition:!0,shouldOpenOnNextCycle:!1})}},{key:"handleTriggerClick",value:function(e){e.preventDefault(),this.props.triggerDisabled||(this.props.handleTriggerClick?this.props.handleTriggerClick(this.props.accordionPosition):!0===this.state.isClosed?(this.openCollapsible(),this.props.onOpening()):(this.closeCollapsible(),this.props.onClosing()))}},{key:"renderNonClickableTriggerElement",value:function(){return this.props.triggerSibling&&"string"===typeof this.props.triggerSibling?r.default.createElement("span",{className:this.props.classParentString+"__trigger-sibling"},this.props.triggerSibling):this.props.triggerSibling?r.default.createElement(this.props.triggerSibling,null):null}},{key:"handleTransitionEnd",value:function(){this.state.isClosed?(this.setState({inTransition:!1}),this.props.onClose()):(this.setState({height:"auto",overflow:this.props.overflowWhenOpen,inTransition:!1}),this.props.onOpen())}},{key:"setInnerRef",value:function(e){this.innerRef=e}},{key:"render",value:function(){var e=this,t={height:this.state.height,WebkitTransition:this.state.transition,msTransition:this.state.transition,transition:this.state.transition,overflow:this.state.overflow},a=this.state.isClosed?"is-closed":"is-open",n=this.props.triggerDisabled?"is-disabled":"",s=!1===this.state.isClosed&&void 0!==this.props.triggerWhenOpen?this.props.triggerWhenOpen:this.props.trigger,i=this.props.triggerTagName,l=this.props.lazyRender&&!this.state.hasBeenOpened&&this.state.isClosed&&!this.state.inTransition?null:this.props.children,o=this.props.classParentString+"__trigger "+a+" "+n+" "+(this.state.isClosed?this.props.triggerClassName:this.props.triggerOpenedClassName),c=this.props.classParentString+" "+(this.state.isClosed?this.props.className:this.props.openedClassName),u=this.props.classParentString+"__contentOuter "+this.props.contentOuterClassName,p=this.props.classParentString+"__contentInner "+this.props.contentInnerClassName;return r.default.createElement("div",{className:c.trim()},r.default.createElement(i,{className:o.trim(),onClick:this.handleTriggerClick,style:this.props.triggerStyle&&this.props.triggerStyle,onKeyPress:function(t){var a=t.key;" "!==a&&"Enter"!==a||e.handleTriggerClick(t)},tabIndex:this.props.tabIndex&&this.props.tabIndex},s),this.renderNonClickableTriggerElement(),r.default.createElement("div",{className:u.trim(),style:t,onTransitionEnd:this.handleTransitionEnd},r.default.createElement("div",{className:p.trim(),ref:this.setInnerRef},l)))}}]),t}();o.propTypes={transitionTime:i.default.number,transitionCloseTime:i.default.number,triggerTagName:i.default.string,easing:i.default.string,open:i.default.bool,classParentString:i.default.string,openedClassName:i.default.string,triggerStyle:i.default.object,triggerClassName:i.default.string,triggerOpenedClassName:i.default.string,contentOuterClassName:i.default.string,contentInnerClassName:i.default.string,accordionPosition:i.default.oneOfType([i.default.string,i.default.number]),handleTriggerClick:i.default.func,onOpen:i.default.func,onClose:i.default.func,onOpening:i.default.func,onClosing:i.default.func,trigger:i.default.oneOfType([i.default.string,i.default.element]),triggerWhenOpen:i.default.oneOfType([i.default.string,i.default.element]),triggerDisabled:i.default.bool,lazyRender:i.default.bool,overflowWhenOpen:i.default.oneOf(["hidden","visible","auto","scroll","inherit","initial","unset"]),triggerSibling:i.default.oneOfType([i.default.element,i.default.func]),tabIndex:i.default.number},o.defaultProps={transitionTime:400,transitionCloseTime:null,triggerTagName:"span",easing:"linear",open:!1,classParentString:"Collapsible",triggerDisabled:!1,lazyRender:!1,overflowWhenOpen:"hidden",openedClassName:"",triggerStyle:null,triggerClassName:"",triggerOpenedClassName:"",contentOuterClassName:"",contentInnerClassName:"",className:"",triggerSibling:null,onOpen:function(){},onClose:function(){},onOpening:function(){},onClosing:function(){},tabIndex:null},t.default=o},233:function(e,t,a){"use strict";a.d(t,"b",function(){return l}),a.d(t,"c",function(){return o}),a.d(t,"a",function(){return c});var n=a(59),s=a(10),r=a(9),i=a.n(r),l=function(){return function(e){i.a.post(s.v).then(function(t){var a=t.data;return e({type:n.b,payload:a})}).catch(function(e){console.log(e)})}},o=function(e){return function(t){i.a.post(s.L,{slug:e}).then(function(e){var a=e.data;return t({type:n.c,payload:a})}).catch(function(e){console.log(e)})}},c=function(){return function(e){return e({type:n.a,payload:[]})}}},313:function(e,t,a){"use strict";a.r(t);var n=a(3),s=a(4),r=a(6),i=a(5),l=a(7),o=a(0),c=a.n(o),u=a(93),p=a(16),g=a(90),m=function(e){function t(){return Object(n.a)(this,t),Object(r.a)(this,Object(i.a)(t).apply(this,arguments))}return Object(l.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this;return c.a.createElement(c.a.Fragment,null,c.a.createElement("div",{className:"block-content block-content-full bg-white",onClick:function(){return e.props.logoutUser()}},c.a.createElement("div",{className:"display-flex"},c.a.createElement("div",{className:"flex-auto logout-text"},localStorage.getItem("accountLogout")),c.a.createElement("div",{className:"flex-auto text-right"},c.a.createElement("i",{className:"si si-power logout-icon"})))))}}]),t}(o.Component),d=Object(p.b)(function(e){return{}},{logoutUser:g.g})(m),h=a(38),f=a(333),v=a(323),b=a(334),y=function(e){function t(){var e,a;Object(n.a)(this,t);for(var s=arguments.length,l=new Array(s),o=0;o<s;o++)l[o]=arguments[o];return(a=Object(r.a)(this,(e=Object(i.a)(t)).call.apply(e,[this].concat(l)))).state={open:!1},a.handleClose=function(){a.setState({open:!1})},a}return Object(l.a)(t,e),Object(s.a)(t,[{key:"componentWillReceiveProps",value:function(e){!1===e.avatarPopupOpen&&this.setState({open:!1}),!0===e.avatarPopupOpen&&this.setState({open:!0})}},{key:"render",value:function(){return c.a.createElement(c.a.Fragment,null,c.a.createElement(v.a,{maxWidth:!1,fullWidth:!0,fullScreen:!0,open:this.state.open,onClose:this.handleClose},c.a.createElement(b.a,{id:"responsive-dialog-title"},localStorage.getItem("chooseAvatarText")),c.a.createElement("div",{className:"container"},c.a.createElement("div",{className:"row"},c.a.createElement("div",{className:"col-3"},c.a.createElement("img",{src:"/assets/img/various/avatars/user1.gif",alt:"Avatar",style:{width:"85px"},onClick:this.props.handleAvatarChange,"data-name":"user1"})),c.a.createElement("div",{className:"col-3"},c.a.createElement("img",{src:"/assets/img/various/avatars/user2.gif",alt:"Avatar",style:{width:"85px"},onClick:this.props.handleAvatarChange,"data-name":"user2"})),c.a.createElement("div",{className:"col-3"},c.a.createElement("img",{src:"/assets/img/various/avatars/user3.gif",alt:"Avatar",style:{width:"85px"},onClick:this.props.handleAvatarChange,"data-name":"user3"})),c.a.createElement("div",{className:"col-3"},c.a.createElement("img",{src:"/assets/img/various/avatars/user4.gif",alt:"Avatar",style:{width:"85px"},onClick:this.props.handleAvatarChange,"data-name":"user4"})),c.a.createElement("div",{className:"col-3"},c.a.createElement("img",{src:"/assets/img/various/avatars/user5.gif",alt:"Avatar",style:{width:"85px"},onClick:this.props.handleAvatarChange,"data-name":"user5"})),c.a.createElement("div",{className:"col-3"},c.a.createElement("img",{src:"/assets/img/various/avatars/user6.gif",alt:"Avatar",style:{width:"85px"},onClick:this.props.handleAvatarChange,"data-name":"user6"})),c.a.createElement("div",{className:"col-3"},c.a.createElement("img",{src:"/assets/img/various/avatars/user7.gif",alt:"Avatar",style:{width:"85px"},onClick:this.props.handleAvatarChange,"data-name":"user7"})),c.a.createElement("div",{className:"col-3"},c.a.createElement("img",{src:"/assets/img/various/avatars/user8.gif",alt:"Avatar",style:{width:"85px"},onClick:this.props.handleAvatarChange,"data-name":"user8"})),c.a.createElement("div",{className:"col-3"},c.a.createElement("img",{src:"/assets/img/various/avatars/user9.gif",alt:"Avatar",style:{width:"85px"},onClick:this.props.handleAvatarChange,"data-name":"user9"})),c.a.createElement("div",{className:"col-3"},c.a.createElement("img",{src:"/assets/img/various/avatars/user10.gif",alt:"Avatar",style:{width:"85px"},onClick:this.props.handleAvatarChange,"data-name":"user10"}))),c.a.createElement("div",{className:"d-flex justify-content-center mt-50"},c.a.createElement("button",{className:"btn btn-default btn-md",onClick:this.handleClose},localStorage.getItem("cancelGoBackBtn"))))))}}]),t}(o.Component),C=a(13),E=function(e){function t(){var e,a;Object(n.a)(this,t);for(var s=arguments.length,l=new Array(s),o=0;o<s;o++)l[o]=arguments[o];return(a=Object(r.a)(this,(e=Object(i.a)(t)).call.apply(e,[this].concat(l)))).state={avatarPopupOpen:!1,loading:!1},a.openAvatarPopup=function(){a.setState({avatarPopupOpen:!0})},a.handleAvatarChange=function(e){a.setState({loading:!0}),a.props.changeAvatar(a.props.user_info.auth_token,e.target.getAttribute("data-name")).then(function(e){e&&e.success&&(a.props.updateUserInfo(),a.setState({loading:!1}))})},a}return Object(l.a)(t,e),Object(s.a)(t,[{key:"componentWillReceiveProps",value:function(e){this.setState({avatarPopupOpen:e.avatarPopup})}},{key:"render",value:function(){var e=this.props.user_info;return c.a.createElement(c.a.Fragment,null,this.state.loading&&c.a.createElement(C.a,null),c.a.createElement(y,{avatarPopupOpen:this.state.avatarPopupOpen,handleAvatarChange:this.handleAvatarChange}),c.a.createElement("div",{className:"block-content block-content-full bg-light"},c.a.createElement("div",{className:"d-flex justify-content-between align-items-center"},c.a.createElement("div",null,c.a.createElement("h2",{className:"font-w600 mb-10"},e.name),c.a.createElement("p",{className:"text-muted"},e.phone," ",c.a.createElement("br",null)," ",e.email)),c.a.createElement("div",null,null==e.avatar?c.a.createElement("img",{src:"/assets/img/various/avatars/user2.gif",alt:e.name,style:{width:"100px"},onClick:this.openAvatarPopup}):c.a.createElement("img",{src:"/assets/img/various/avatars/".concat(e.avatar,".gif"),alt:e.name,style:{width:"100px"},onClick:this.openAvatarPopup})))))}}]),t}(o.Component),O=Object(p.b)(function(e){return{}},{changeAvatar:g.a})(E),N=a(227),S=a.n(N),w=a(45),k=a(224),T=function(e){function t(){var e,a;Object(n.a)(this,t);for(var s=arguments.length,l=new Array(s),o=0;o<s;o++)l[o]=arguments[o];return(a=Object(r.a)(this,(e=Object(i.a)(t)).call.apply(e,[this].concat(l)))).state={open:!1},a.handlePopupOpen=function(){a.setState({open:!0})},a.handlePopupClose=function(){a.setState({open:!1})},a}return Object(l.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.props.page;return c.a.createElement(c.a.Fragment,null,c.a.createElement("div",{className:"display-flex py-2",onClick:this.handlePopupOpen},c.a.createElement("div",{className:"flex-auto border-0"},e.name),c.a.createElement("div",{className:"flex-auto text-right"},c.a.createElement("i",{className:"si si-arrow-right"}))),c.a.createElement(k.a,{open:this.state.open,onClose:this.handlePopupClose,closeIconSize:32},c.a.createElement("div",{className:"mt-50",dangerouslySetInnerHTML:{__html:e.body}})))}}]),t}(o.Component),x=function(e){function t(){return Object(n.a)(this,t),Object(r.a)(this,Object(i.a)(t).apply(this,arguments))}return Object(l.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.props.pages;return c.a.createElement(c.a.Fragment,null,c.a.createElement(S.a,{trigger:localStorage.getItem("accountMyAccount"),transitionTime:200,open:!0},c.a.createElement("div",{className:"category-list-item"},c.a.createElement(w.a,{to:"/my-addresses",delay:200},c.a.createElement("div",{className:"display-flex py-2"},c.a.createElement("div",{className:"mr-10 border-0"},c.a.createElement("i",{className:"si si-home"})),c.a.createElement("div",{className:"flex-auto border-0"},localStorage.getItem("accountManageAddress")),c.a.createElement("div",{className:"flex-auto text-right"},c.a.createElement("i",{className:"si si-arrow-right"}))))),c.a.createElement("div",{className:"category-list-item"},c.a.createElement(w.a,{to:"/my-orders",delay:200},c.a.createElement("div",{className:"display-flex py-2"},c.a.createElement("div",{className:"mr-10 border-0"},c.a.createElement("i",{className:"si si-basket-loaded"})),c.a.createElement("div",{className:"flex-auto border-0"},localStorage.getItem("accountMyOrders")),c.a.createElement("div",{className:"flex-auto text-right"},c.a.createElement("i",{className:"si si-arrow-right"}))))),c.a.createElement("div",{className:"category-list-item"},c.a.createElement(w.a,{to:"/my-wallet",delay:200},c.a.createElement("div",{className:"display-flex py-2"},c.a.createElement("div",{className:"mr-10 border-0"},c.a.createElement("i",{className:"si si-wallet"})),c.a.createElement("div",{className:"flex-auto border-0"},localStorage.getItem("accountMyWallet")),c.a.createElement("div",{className:"flex-auto text-right"},c.a.createElement("i",{className:"si si-arrow-right"})))))),c.a.createElement(S.a,{trigger:localStorage.getItem("accountHelpFaq"),transitionTime:200},e.map(function(e){return c.a.createElement("div",{key:e.id,className:"category-list-item"},c.a.createElement(T,{page:e}))})))}}]),t}(o.Component),P=a(233),j=a(25),I=function(e){function t(){var e,a;Object(n.a)(this,t);for(var s=arguments.length,l=new Array(s),o=0;o<s;o++)l[o]=arguments[o];return(a=Object(r.a)(this,(e=Object(i.a)(t)).call.apply(e,[this].concat(l)))).state={avatarPopup:!1},a.updateUserInfo=function(){var e=a.props.user;a.props.updateUserInfo(e.data.id,e.data.auth_token).then(function(e){e&&e.payload.data.id&&a.setState({avatarPopup:!1})})},a.handleOnChange=function(e){a.props.getSingleLanguageData(e.target.value),localStorage.setItem("userPreferedLanguage",e.target.value)},a}return Object(l.a)(t,e),Object(s.a)(t,[{key:"componentDidMount",value:function(){var e=this.props.user;null!==localStorage.getItem("storeColor")&&e.success&&(this.props.getPages(),this.updateUserInfo(e))}},{key:"componentWillReceiveProps",value:function(e){if(this.props.languages!==e.languages)if(localStorage.getItem("userPreferedLanguage"))this.props.getSingleLanguageData(localStorage.getItem("userPreferedLanguage"));else if(e.languages.length){console.log("Fetching Translation Data...");var t=e.languages.filter(function(e){return 1===e.is_default})[0].id;this.props.getSingleLanguageData(t)}}},{key:"render",value:function(){if(window.innerWidth>768)return c.a.createElement(f.a,{to:"/"});if(null===localStorage.getItem("storeColor"))return c.a.createElement(f.a,{to:"/"});var e=this.props,t=e.user,a=e.pages;if(!t.success)return c.a.createElement(f.a,{to:"/login"});var n=this.props.languages;return c.a.createElement(c.a.Fragment,null,c.a.createElement(h.a,{seotitle:localStorage.getItem("footerAccount"),seodescription:localStorage.getItem("seoMetaDescription"),ogtype:"website",ogtitle:localStorage.getItem("seoOgTitle"),ogdescription:localStorage.getItem("seoOgDescription"),ogurl:window.location.href,twittertitle:localStorage.getItem("seoTwitterTitle"),twitterdescription:localStorage.getItem("seoTwitterDescription")}),c.a.createElement(O,{user_info:t.data,updateUserInfo:this.updateUserInfo,avatarPopup:this.state.avatarPopup}),c.a.createElement(x,{pages:a}),c.a.createElement(d,null),c.a.createElement(u.a,{active_account:!0}),n&&n.length>1&&c.a.createElement("div",{className:"mt-4 d-flex align-items-center justify-content-center mb-100"},c.a.createElement("div",{className:"mr-2"},localStorage.getItem("changeLanguageText")),c.a.createElement("select",{onChange:this.handleOnChange,defaultValue:localStorage.getItem("userPreferedLanguage")?localStorage.getItem("userPreferedLanguage"):n.filter(function(e){return 1===e.is_default})[0].id,className:"form-control language-select"},n.map(function(e){return c.a.createElement("option",{value:e.id,key:e.id},e.language_name)}))))}}]),t}(o.Component);t.default=Object(p.b)(function(e){return{user:e.user.user,pages:e.pages.pages,languages:e.languages.languages,language:e.languages.language}},{getPages:P.b,getSingleLanguageData:j.b,updateUserInfo:g.k})(I)}}]);