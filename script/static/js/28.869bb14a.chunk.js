(window.webpackJsonp=window.webpackJsonp||[]).push([[28],{328:function(e,t,a){"use strict";a.r(t);var r=a(53),l=a(3),o=a(4),n=a(6),s=a(5),c=a(7),i=a(0),u=a.n(i),g=a(67),m=a(10),d=a(9),p=a.n(d),h=a(16),S=a(44),f=a(45),y=a(21),E=a.n(y),b=a(40),v=a.n(b),I=a(58),x=a(333),O=a(38),k=a(109);a.d(t,"RestaurantListOnCategory",function(){return w});var w=function(e){function t(){var e,a;Object(l.a)(this,t);for(var o=arguments.length,c=new Array(o),i=0;i<o;i++)c[i]=arguments[i];return(a=Object(n.a)(this,(e=Object(s.a)(t)).call.apply(e,[this].concat(c)))).state={selectedOption:null,options:[],defaultValues:[],checkboxChecked:!1,checkedCount:0,loading:!0},a._processSelectedCheckboxs=function(){a.setState({loading:!0});var e=[],t=document.querySelectorAll("input[type=checkbox]:checked");if(a.setState({checkedCount:t.length}),0!==t.length){for(var r=0;r<t.length;r++)e.push({value:parseInt(t[r].getAttribute("data-value")),label:t[r].getAttribute("data-label")});return new Promise(function(t,r){localStorage.setItem("categorySelectOptions",JSON.stringify(e));var l=JSON.parse(localStorage.getItem("categorySelectOptions")),o=JSON.parse(localStorage.getItem("userSetAddress"));if(l){var n=[];l.map(function(e){return n.push(parseInt(e.value))}),a.props.getRestaurantsBasedOnCategory(o.lat,o.lng,n)}JSON.parse(localStorage.getItem("categorySelectOptions"))?t(a.sortRestaurantCategoriesOptions()):r(new Error("Promise rejected"))})}console.log("Came here"),localStorage.removeItem("categorySelectOptions")},a.callAfterDefaultRestaurantsCategoriesSelected=function(){a.handleChange(a.state.defaultValues)},a.selectRestaurantsCategories=function(e){var t=[];if(e&&(e.categories.map(function(e){var a={value:e.id,label:e.name};return a&&t.push(a),null}),t.length>0))return a.setState({options:t}),localStorage.setItem("allSelectableOptions",JSON.stringify(t)),new Promise(function(e,t){JSON.parse(localStorage.getItem("allSelectableOptions"))?e(a.sortRestaurantCategoriesOptions()):t(new Error("Promise rejected"))})},a.checkIfChecked=function(e){return JSON.parse(localStorage.getItem("categorySelectOptions")).some(function(t){return e===t.value})},a.sortRestaurantCategoriesOptions=function(){var e=JSON.parse(localStorage.getItem("categorySelectOptions")),t=JSON.parse(localStorage.getItem("allSelectableOptions")),l=new Set(e.map(function(e){return e.value})),o=[].concat(Object(r.a)(e),Object(r.a)(t.filter(function(e){return!l.has(e.value)})));o.length===t.length&&a.setState({options:o})},a}return Object(c.a)(t,e),Object(o.a)(t,[{key:"componentDidMount",value:function(){this.props.getRestaurantsCategories(),this.setState({checkedCount:JSON.parse(localStorage.getItem("categorySelectOptions")).length})}},{key:"filterRestaurants",value:function(){var e=JSON.parse(localStorage.getItem("categorySelectOptions")),t=JSON.parse(localStorage.getItem("userSetAddress"));if(e){var a=[];e.map(function(e){return a.push(parseInt(e.value))}),this.props.getRestaurantsBasedOnCategory(t.lat,t.lng,a)}}},{key:"componentWillReceiveProps",value:function(e){this.props.restaurants_categories.categories!==e.restaurants_categories.categories&&this.setState({selectedOption:e.restaurants_categories.categories}),this.props.filtered_restaurants!==e.filtered_restaurants&&this.setState({loading:!1})}},{key:"componentDidUpdate",value:function(e){this.props.restaurants_categories!==e.restaurants_categories&&(this.filterRestaurants(),this.selectRestaurantsCategories(this.props.restaurants_categories))}},{key:"render",value:function(){var e=this;if(window.innerWidth>768)return u.a.createElement(x.a,{to:"/"});if(null===localStorage.getItem("categorySelectOptions"))return u.a.createElement(x.a,{to:"/"});if(null===localStorage.getItem("userSetAddress"))return console.log("Redirect to search location"),u.a.createElement(x.a,{to:"/search-location"});var t=this.state.selectedOption,a=this.props,r=a.history,l=a.user;return u.a.createElement(u.a.Fragment,null,u.a.createElement(O.a,{seotitle:localStorage.getItem("seoMetaTitle"),seodescription:localStorage.getItem("seoMetaDescription"),ogtype:"website",ogtitle:localStorage.getItem("seoOgTitle"),ogdescription:localStorage.getItem("seoOgDescription"),ogurl:window.location.href,twittertitle:localStorage.getItem("seoTwitterTitle"),twitterdescription:localStorage.getItem("seoTwitterDescription")}),u.a.createElement(k.a,{logo:!0,logoLink:!0,active_nearme:!0,disable_back_button:!0,history:r,loggedin:l.success}),this.state.options.length>0&&null!==t&&u.a.createElement(u.a.Fragment,null,u.a.createElement("div",{className:"category-checkboxes-block px-15 mt-20",ref:"categoryOptions"},u.a.createElement("div",{className:"filter-count-block"},localStorage.getItem("categoriesFiltersText")," ",this.state.checkedCount),this.state.options.map(function(t){return u.a.createElement("label",{key:t.value,style:{position:"relative"}},u.a.createElement("input",{type:"checkbox",value:t.value,defaultChecked:e.checkIfChecked(t.value),onChange:e._processSelectedCheckboxs,"data-label":t.label,"data-value":t.value}),u.a.createElement("span",null,t.label),u.a.createElement(E.a,{duration:"500",hasTouch:!0}))}))),this.state.loading?u.a.createElement(S.a,{height:378,width:400,speed:1.2,primaryColor:"#f3f3f3",secondaryColor:"#ecebeb"},u.a.createElement("rect",{x:"20",y:"20",rx:"4",ry:"4",width:"80",height:"78"}),u.a.createElement("rect",{x:"144",y:"30",rx:"0",ry:"0",width:"115",height:"18"}),u.a.createElement("rect",{x:"144",y:"60",rx:"0",ry:"0",width:"165",height:"16"}),u.a.createElement("rect",{x:"20",y:"145",rx:"4",ry:"4",width:"80",height:"78"}),u.a.createElement("rect",{x:"144",y:"155",rx:"0",ry:"0",width:"115",height:"18"}),u.a.createElement("rect",{x:"144",y:"185",rx:"0",ry:"0",width:"165",height:"16"}),u.a.createElement("rect",{x:"20",y:"270",rx:"4",ry:"4",width:"80",height:"78"}),u.a.createElement("rect",{x:"144",y:"280",rx:"0",ry:"0",width:"115",height:"18"}),u.a.createElement("rect",{x:"144",y:"310",rx:"0",ry:"0",width:"165",height:"16"})):u.a.createElement(u.a.Fragment,null,0===this.props.filtered_restaurants.length?u.a.createElement(u.a.Fragment,null,u.a.createElement("div",{className:"d-flex justify-content-center mt-100"},u.a.createElement("img",{className:"explore-bg",src:"/assets/img/various/explore-bg.png",alt:localStorage.getItem("restaurantSearchPlaceholder")})),u.a.createElement("h4",{className:"d-flex justify-content-center filter-no-found"},localStorage.getItem("categoriesNoRestaurantsFoundText"))):this.props.filtered_restaurants.map(function(t,a){return u.a.createElement(u.a.Fragment,{key:t.id},u.a.createElement("div",{className:"col-xs-12 col-sm-12 restaurant-block"},u.a.createElement(f.a,{to:"../stores/"+t.slug,delay:200,className:"block text-center mb-3",clickAction:function(){"DELIVERY"===localStorage.getItem("userPreferredSelection")&&1===t.delivery_type&&localStorage.setItem("userSelected","DELIVERY"),"SELFPICKUP"===localStorage.getItem("userPreferredSelection")&&2===t.delivery_type&&localStorage.setItem("userSelected","SELFPICKUP"),"DELIVERY"===localStorage.getItem("userPreferredSelection")&&3===t.delivery_type&&localStorage.setItem("userSelected","DELIVERY"),"SELFPICKUP"===localStorage.getItem("userPreferredSelection")&&3===t.delivery_type&&localStorage.setItem("userSelected","SELFPICKUP")}},u.a.createElement("div",{className:"block-content block-content-full ".concat(t.is_featured?"ribbon ribbon-bookmark ribbon-warning pt-2":"pt-2"," ")},t.is_featured?u.a.createElement("div",{className:"ribbon-box"},localStorage.getItem("restaurantFeaturedText")):null,u.a.createElement(v.a,null,u.a.createElement("img",{src:t.image,alt:t.name,className:"restaurant-image"}))),u.a.createElement("div",{className:"block-content block-content-full restaurant-info"},u.a.createElement("div",{className:"font-w600 mb-5 text-dark"},t.name),u.a.createElement("div",{className:"font-size-sm text-muted truncate-text text-muted"},t.description),u.a.createElement("hr",{className:"my-10"}),u.a.createElement("div",{className:"text-center restaurant-meta mt-5 d-flex align-items-center justify-content-between text-muted"},u.a.createElement("div",{className:"col-2 p-0 text-left"},u.a.createElement("i",{className:"fa fa-star pr-1",style:{color:localStorage.getItem("storeColor")}})," ",t.rating),u.a.createElement("div",{className:"col-4 p-0 text-center"},u.a.createElement("i",{className:"si si-clock pr-1"})," ",t.delivery_time," ",localStorage.getItem("homePageMinsText")),u.a.createElement("div",{className:"col-6 p-0 text-center"},u.a.createElement("i",{className:"si si-wallet pr-1"})," ","left"===localStorage.getItem("currencySymbolAlign")&&localStorage.getItem("currencyFormat"),t.price_range," ","right"===localStorage.getItem("currencySymbolAlign")&&localStorage.getItem("currencyFormat"),localStorage.getItem("homePageForTwoText")))),u.a.createElement(E.a,{duration:"500",hasTouch:!1}))),"true"===localStorage.getItem("showPromoSlider")&&u.a.createElement(u.a.Fragment,null,e.props.slides&&e.props.slides.length>0&&u.a.createElement(u.a.Fragment,null,a===e.props.slides[0].promo_slider.position_id-1&&u.a.createElement(I.a,{slides:e.props.slides,size:e.props.slides[0].promo_slider.size,secondarySlider:!0}))))})))}}]),t}(i.Component);t.default=Object(h.b)(function(e){return{restaurants_categories:e.restaurant.restaurants_categories,filtered_restaurants:e.restaurant.filtered_restaurants,user:e.user.user}},{getRestaurantsBasedOnCategory:function(e,t,a){return function(r){p.a.post(m.s,{latitude:e,longitude:t,category_ids:a}).then(function(e){var t=e.data;return r({type:g.b,payload:t})}).catch(function(e){console.log(e)})}},getRestaurantsCategories:function(e){return function(e){p.a.post(m.A).then(function(t){var a=t.data;return e({type:g.c,payload:a})}).catch(function(e){console.log(e)})}}})(w)}}]);