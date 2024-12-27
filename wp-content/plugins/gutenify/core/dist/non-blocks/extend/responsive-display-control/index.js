(()=>{"use strict";var e,t={2695:()=>{const e=window.React,t=window.lodash,n=window.wp.hooks,a=window.wp.compose,o=window.wp.element,l=window.wp.blockEditor,r=window.wp.i18n,i=window.wp.components,s=["core/group"];(0,n.addFilter)("blocks.registerBlockType","extend-block-example/attribute/spacing",((e,n)=>s.includes(n)?(e.attributes=(0,t.assign)(e.attributes,{responsiveDisplay:{type:"array",default:[]}}),e):e));const c=[{label:(0,r.__)("Desktop"),name:"desktop"},{label:(0,r.__)("Tablet"),name:"tablet"},{label:(0,r.__)("Mobile"),name:"mobile"}],d=(0,a.createHigherOrderComponent)((n=>a=>{if(!s.includes(a.name))return(0,e.createElement)(n,{...a});const{responsiveDisplay:d,className:p}=a.attributes;return(0,t.isEmpty)(p)&&(a.attributes.className=""),(0,e.createElement)(o.Fragment,null,(0,e.createElement)(n,{...a}),(0,e.createElement)(l.InspectorAdvancedControls,null,(0,e.createElement)(i.BaseControl,{id:"textarea-1",label:(0,r.__)("Hide on specific device")},c.map((n=>(0,e.createElement)(o.Fragment,{key:`${n.name}`},(0,e.createElement)(i.ToggleControl,{label:`${(0,r.__)("Hide on")} ${n.label}`,help:d.includes(n.name)?`${(0,r.__)("Hidden on")} ${n.label}`:"",checked:d.includes(n.name),onChange:e=>{let o=[...d,n.name],l=a.attributes.className;if(e)l=a.attributes.className+` hide-on-${n.name}`;else{o=(0,t.without)(d,n.name);const e=(0,t.without)(l.split(" "),`hide-on-${n.name}`,"undefined");l=e.join(" ")}a.setAttributes({responsiveDisplay:[...o],className:l})}})))))))}),"withSpacingControl");(0,n.addFilter)("editor.BlockEdit","extend-block-example/with-spacing-control",d)}},n={};function a(e){var o=n[e];if(void 0!==o)return o.exports;var l=n[e]={exports:{}};return t[e](l,l.exports,a),l.exports}a.m=t,e=[],a.O=(t,n,o,l)=>{if(!n){var r=1/0;for(d=0;d<e.length;d++){for(var[n,o,l]=e[d],i=!0,s=0;s<n.length;s++)(!1&l||r>=l)&&Object.keys(a.O).every((e=>a.O[e](n[s])))?n.splice(s--,1):(i=!1,l<r&&(r=l));if(i){e.splice(d--,1);var c=o();void 0!==c&&(t=c)}}return t}l=l||0;for(var d=e.length;d>0&&e[d-1][2]>l;d--)e[d]=e[d-1];e[d]=[n,o,l]},a.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={872:0,712:0};a.O.j=t=>0===e[t];var t=(t,n)=>{var o,l,[r,i,s]=n,c=0;if(r.some((t=>0!==e[t]))){for(o in i)a.o(i,o)&&(a.m[o]=i[o]);if(s)var d=s(a)}for(t&&t(n);c<r.length;c++)l=r[c],a.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return a.O(d)},n=globalThis.webpackChunkgutenify=globalThis.webpackChunkgutenify||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})();var o=a.O(void 0,[712],(()=>a(2695)));o=a.O(o)})();