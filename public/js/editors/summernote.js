!function(e){var t={};function n(a){if(t[a])return t[a].exports;var r=t[a]={i:a,l:!1,exports:{}};return e[a].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,a){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:a})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var a=Object.create(null);if(n.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(a,r,function(t){return e[t]}.bind(null,r));return a},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=26)}({26:function(e,t,n){e.exports=n("8N64")},"8N64":function(e,t){var n,a=!1;function r(e,t){$.ajax({url:n.data("mention")+"?q="+e+"&new=1",type:"get",dataType:"json",async:!0}).done(t)}function o(e){return(e.image?e.image:"")+e.fullname+(e.type?" ("+e.type+")":"")}function l(e){if(e.id){var t="["+e.model_type+":"+e.id+"]";return n.data("advanced-mention")||a?t:$("<a />",{text:e.fullname,href:"#",class:"mention","data-name":e.fullname,"data-mention":t})[0]}return e.url?e.tooltip?$("<a />",{text:e.fullname,href:e.url,title:e.tooltip.replace(/["]/g,"'"),"data-toggle":"tooltip","data-html":"true"})[0]:$("<a />",{text:e.fullname,href:e.url})[0]:e.inject?e.inject:e.fullname}function u(e){return e?"he"==e?"he-IL":"ca"==e?"ca-ES":"el"==e?"el-GR":"en"==e?"en-US":e+"-"+e.toUpperCase():"en-US"}$(document).ready((function(){(n=$("#summernote-config")).length>0&&window.initSummernote()})),window.initSummernote=function(){var e=$(".html-editor").summernote({height:"300px",lang:u(n.data("locale")),toolbar:[["style",["style"]],["font",["bold","italic","underline","strikethrough","clear"]],["color",["color"]],["para",["ul","ol","kanka-indent","kanka-outdent","paragraph"]],["table",["table","spoiler","tableofcontent"]],["insert",["link","picture","video","embed","hr"]],["view",["fullscreen","codeview","help"]],""!==n.data("gallery")?["extensions",["gallery"]]:null],popover:{table:[["add",["addRowDown","addRowUp","addColLeft","addColRight"]],["delete",["deleteRow","deleteCol","deleteTable"]],["custom",["tableHeaders"]]]},callbacks:{onImageUpload:function(t){!function(e,t){if(!n.data("gallery-upload"))return $("#campaign-imageupload-error").modal(),void console.warn("Campaign isn't superboosted");formData=new FormData,formData.append("file",t),formData.append("_token",$('meta[name="csrf-token"]').attr("content")),$.ajax({url:n.data("gallery-upload"),data:formData,cache:!1,contentType:!1,processData:!1,type:"POST",success:function(t){e.summernote("insertImage",t,(function(e){e.attr("src",t)}))},error:function(e,t,n){$("#superboosted-error").text(function(e){var t="";for(var n in e)e.hasOwnProperty(n)&&(t+=e[n]+"\n");return t}(e.responseJSON.errors)),$("#campaign-imageupload-error").modal()}})}(e,t[0])},onChange:function(){window.entityFormHasUnsavedChanges=!0},onChangeCodeview:function(t,n){e.summernote("code",t)}},gallery:{source:{url:n.data("gallery"),responseDataKey:"data",nextPageKey:"links.next"},modal:{loadOnScroll:!0,maxHeight:300,title:n.data("gallery-title"),close_text:n.data("gallery-close"),ok_text:n.data("gallery-add"),selectAll_text:n.data("gallery-select-all"),deselectAll_text:n.data("gallery-deselect-all"),noImageSelected_msg:n.data("gallery-error")}},hint:[{match:/\B@(\S*)$/,search:function(e,t){return e.length<3?[]:r(e,t)},template:function(e){return o(e)},content:function(e){return a=!1,l(e)}},{match:/\B\[(\S[^:]*)$/,search:function(e,t){return e.length<3?[]:r(e,t)},template:function(e){return o(e)},content:function(e){return a=!0,l(e)}},{match:/\B\#(\S*)$/,search:function(e,t){return function(e,t){$.ajax({url:n.data("months")+"?q="+e,type:"get",dataType:"json",async:!0}).done(t)}(e,t)},template:function(e){return o(e)},content:function(e){return a=!1,l(e)}},{match:/\B{(\S[^:]*)$/,search:function(e,t){return function(e,t){if(!n.data("attributes"))return!1;$.ajax({url:n.data("attributes")+"?q="+e,type:"get",dataType:"json",async:!0}).done(t)}(e,t)},template:function(e){return function(e){return e.name+(e.value?" ("+e.value+")":"")}(e)},content:function(e){return function(e){if(n.data("advanced-mention"))return"{attribute:"+e.id+"}";return $("<a />",{href:"#",class:"attribute attribute-mention",text:"{"+e.name+"}","data-attribute":"{attribute:"+e.id+"}"})[0]}(e)}}]})}}});