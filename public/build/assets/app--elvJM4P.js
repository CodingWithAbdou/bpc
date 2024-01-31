function we(e,t){return function(){return e.apply(t,arguments)}}const{toString:qe}=Object.prototype,{getPrototypeOf:ne}=Object,q=(e=>t=>{const n=qe.call(t);return e[n]||(e[n]=n.slice(8,-1).toLowerCase())})(Object.create(null)),T=e=>(e=e.toLowerCase(),t=>q(t)===e),H=e=>t=>typeof t===e,{isArray:P}=Array,D=H("undefined");function He(e){return e!==null&&!D(e)&&e.constructor!==null&&!D(e.constructor)&&O(e.constructor.isBuffer)&&e.constructor.isBuffer(e)}const Se=T("ArrayBuffer");function Me(e){let t;return typeof ArrayBuffer<"u"&&ArrayBuffer.isView?t=ArrayBuffer.isView(e):t=e&&e.buffer&&Se(e.buffer),t}const $e=H("string"),O=H("function"),Re=H("number"),z=e=>e!==null&&typeof e=="object",ze=e=>e===!0||e===!1,U=e=>{if(q(e)!=="object")return!1;const t=ne(e);return(t===null||t===Object.prototype||Object.getPrototypeOf(t)===null)&&!(Symbol.toStringTag in e)&&!(Symbol.iterator in e)},Je=T("Date"),Ve=T("File"),We=T("Blob"),Ke=T("FileList"),Xe=e=>z(e)&&O(e.pipe),Ge=e=>{let t;return e&&(typeof FormData=="function"&&e instanceof FormData||O(e.append)&&((t=q(e))==="formdata"||t==="object"&&O(e.toString)&&e.toString()==="[object FormData]"))},Ye=T("URLSearchParams"),Qe=e=>e.trim?e.trim():e.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"");function F(e,t,{allOwnKeys:n=!1}={}){if(e===null||typeof e>"u")return;let r,s;if(typeof e!="object"&&(e=[e]),P(e))for(r=0,s=e.length;r<s;r++)t.call(null,e[r],r,e);else{const i=n?Object.getOwnPropertyNames(e):Object.keys(e),o=i.length;let c;for(r=0;r<o;r++)c=i[r],t.call(null,e[c],c,e)}}function ge(e,t){t=t.toLowerCase();const n=Object.keys(e);let r=n.length,s;for(;r-- >0;)if(s=n[r],t===s.toLowerCase())return s;return null}const Oe=typeof globalThis<"u"?globalThis:typeof self<"u"?self:typeof window<"u"?window:global,Ae=e=>!D(e)&&e!==Oe;function Y(){const{caseless:e}=Ae(this)&&this||{},t={},n=(r,s)=>{const i=e&&ge(t,s)||s;U(t[i])&&U(r)?t[i]=Y(t[i],r):U(r)?t[i]=Y({},r):P(r)?t[i]=r.slice():t[i]=r};for(let r=0,s=arguments.length;r<s;r++)arguments[r]&&F(arguments[r],n);return t}const Ze=(e,t,n,{allOwnKeys:r}={})=>(F(t,(s,i)=>{n&&O(s)?e[i]=we(s,n):e[i]=s},{allOwnKeys:r}),e),et=e=>(e.charCodeAt(0)===65279&&(e=e.slice(1)),e),tt=(e,t,n,r)=>{e.prototype=Object.create(t.prototype,r),e.prototype.constructor=e,Object.defineProperty(e,"super",{value:t.prototype}),n&&Object.assign(e.prototype,n)},nt=(e,t,n,r)=>{let s,i,o;const c={};if(t=t||{},e==null)return t;do{for(s=Object.getOwnPropertyNames(e),i=s.length;i-- >0;)o=s[i],(!r||r(o,e,t))&&!c[o]&&(t[o]=e[o],c[o]=!0);e=n!==!1&&ne(e)}while(e&&(!n||n(e,t))&&e!==Object.prototype);return t},rt=(e,t,n)=>{e=String(e),(n===void 0||n>e.length)&&(n=e.length),n-=t.length;const r=e.indexOf(t,n);return r!==-1&&r===n},st=e=>{if(!e)return null;if(P(e))return e;let t=e.length;if(!Re(t))return null;const n=new Array(t);for(;t-- >0;)n[t]=e[t];return n},ot=(e=>t=>e&&t instanceof e)(typeof Uint8Array<"u"&&ne(Uint8Array)),it=(e,t)=>{const r=(e&&e[Symbol.iterator]).call(e);let s;for(;(s=r.next())&&!s.done;){const i=s.value;t.call(e,i[0],i[1])}},at=(e,t)=>{let n;const r=[];for(;(n=e.exec(t))!==null;)r.push(n);return r},ct=T("HTMLFormElement"),lt=e=>e.toLowerCase().replace(/[-_\s]([a-z\d])(\w*)/g,function(n,r,s){return r.toUpperCase()+s}),ce=(({hasOwnProperty:e})=>(t,n)=>e.call(t,n))(Object.prototype),ut=T("RegExp"),Te=(e,t)=>{const n=Object.getOwnPropertyDescriptors(e),r={};F(n,(s,i)=>{let o;(o=t(s,i,e))!==!1&&(r[i]=o||s)}),Object.defineProperties(e,r)},dt=e=>{Te(e,(t,n)=>{if(O(e)&&["arguments","caller","callee"].indexOf(n)!==-1)return!1;const r=e[n];if(O(r)){if(t.enumerable=!1,"writable"in t){t.writable=!1;return}t.set||(t.set=()=>{throw Error("Can not rewrite read-only method '"+n+"'")})}})},ft=(e,t)=>{const n={},r=s=>{s.forEach(i=>{n[i]=!0})};return P(e)?r(e):r(String(e).split(t)),n},pt=()=>{},ht=(e,t)=>(e=+e,Number.isFinite(e)?e:t),W="abcdefghijklmnopqrstuvwxyz",le="0123456789",xe={DIGIT:le,ALPHA:W,ALPHA_DIGIT:W+W.toUpperCase()+le},mt=(e=16,t=xe.ALPHA_DIGIT)=>{let n="";const{length:r}=t;for(;e--;)n+=t[Math.random()*r|0];return n};function yt(e){return!!(e&&O(e.append)&&e[Symbol.toStringTag]==="FormData"&&e[Symbol.iterator])}const Et=e=>{const t=new Array(10),n=(r,s)=>{if(z(r)){if(t.indexOf(r)>=0)return;if(!("toJSON"in r)){t[s]=r;const i=P(r)?[]:{};return F(r,(o,c)=>{const p=n(o,s+1);!D(p)&&(i[c]=p)}),t[s]=void 0,i}}return r};return n(e,0)},bt=T("AsyncFunction"),wt=e=>e&&(z(e)||O(e))&&O(e.then)&&O(e.catch),a={isArray:P,isArrayBuffer:Se,isBuffer:He,isFormData:Ge,isArrayBufferView:Me,isString:$e,isNumber:Re,isBoolean:ze,isObject:z,isPlainObject:U,isUndefined:D,isDate:Je,isFile:Ve,isBlob:We,isRegExp:ut,isFunction:O,isStream:Xe,isURLSearchParams:Ye,isTypedArray:ot,isFileList:Ke,forEach:F,merge:Y,extend:Ze,trim:Qe,stripBOM:et,inherits:tt,toFlatObject:nt,kindOf:q,kindOfTest:T,endsWith:rt,toArray:st,forEachEntry:it,matchAll:at,isHTMLForm:ct,hasOwnProperty:ce,hasOwnProp:ce,reduceDescriptors:Te,freezeMethods:dt,toObjectSet:ft,toCamelCase:lt,noop:pt,toFiniteNumber:ht,findKey:ge,global:Oe,isContextDefined:Ae,ALPHABET:xe,generateString:mt,isSpecCompliantForm:yt,toJSONObject:Et,isAsyncFn:bt,isThenable:wt};function m(e,t,n,r,s){Error.call(this),Error.captureStackTrace?Error.captureStackTrace(this,this.constructor):this.stack=new Error().stack,this.message=e,this.name="AxiosError",t&&(this.code=t),n&&(this.config=n),r&&(this.request=r),s&&(this.response=s)}a.inherits(m,Error,{toJSON:function(){return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:a.toJSONObject(this.config),code:this.code,status:this.response&&this.response.status?this.response.status:null}}});const _e=m.prototype,Le={};["ERR_BAD_OPTION_VALUE","ERR_BAD_OPTION","ECONNABORTED","ETIMEDOUT","ERR_NETWORK","ERR_FR_TOO_MANY_REDIRECTS","ERR_DEPRECATED","ERR_BAD_RESPONSE","ERR_BAD_REQUEST","ERR_CANCELED","ERR_NOT_SUPPORT","ERR_INVALID_URL"].forEach(e=>{Le[e]={value:e}});Object.defineProperties(m,Le);Object.defineProperty(_e,"isAxiosError",{value:!0});m.from=(e,t,n,r,s,i)=>{const o=Object.create(_e);return a.toFlatObject(e,o,function(p){return p!==Error.prototype},c=>c!=="isAxiosError"),m.call(o,e.message,t,n,r,s),o.cause=e,o.name=e.name,i&&Object.assign(o,i),o};const St=null;function Q(e){return a.isPlainObject(e)||a.isArray(e)}function Ne(e){return a.endsWith(e,"[]")?e.slice(0,-2):e}function ue(e,t,n){return e?e.concat(t).map(function(s,i){return s=Ne(s),!n&&i?"["+s+"]":s}).join(n?".":""):t}function Rt(e){return a.isArray(e)&&!e.some(Q)}const gt=a.toFlatObject(a,{},null,function(t){return/^is[A-Z]/.test(t)});function J(e,t,n){if(!a.isObject(e))throw new TypeError("target must be an object");t=t||new FormData,n=a.toFlatObject(n,{metaTokens:!0,dots:!1,indexes:!1},!1,function(f,w){return!a.isUndefined(w[f])});const r=n.metaTokens,s=n.visitor||u,i=n.dots,o=n.indexes,p=(n.Blob||typeof Blob<"u"&&Blob)&&a.isSpecCompliantForm(t);if(!a.isFunction(s))throw new TypeError("visitor must be a function");function h(d){if(d===null)return"";if(a.isDate(d))return d.toISOString();if(!p&&a.isBlob(d))throw new m("Blob is not supported. Use a Buffer instead.");return a.isArrayBuffer(d)||a.isTypedArray(d)?p&&typeof Blob=="function"?new Blob([d]):Buffer.from(d):d}function u(d,f,w){let y=d;if(d&&!w&&typeof d=="object"){if(a.endsWith(f,"{}"))f=r?f:f.slice(0,-2),d=JSON.stringify(d);else if(a.isArray(d)&&Rt(d)||(a.isFileList(d)||a.endsWith(f,"[]"))&&(y=a.toArray(d)))return f=Ne(f),y.forEach(function(R,x){!(a.isUndefined(R)||R===null)&&t.append(o===!0?ue([f],x,i):o===null?f:f+"[]",h(R))}),!1}return Q(d)?!0:(t.append(ue(w,f,i),h(d)),!1)}const l=[],E=Object.assign(gt,{defaultVisitor:u,convertValue:h,isVisitable:Q});function S(d,f){if(!a.isUndefined(d)){if(l.indexOf(d)!==-1)throw Error("Circular reference detected in "+f.join("."));l.push(d),a.forEach(d,function(y,g){(!(a.isUndefined(y)||y===null)&&s.call(t,y,a.isString(g)?g.trim():g,f,E))===!0&&S(y,f?f.concat(g):[g])}),l.pop()}}if(!a.isObject(e))throw new TypeError("data must be an object");return S(e),t}function de(e){const t={"!":"%21","'":"%27","(":"%28",")":"%29","~":"%7E","%20":"+","%00":"\0"};return encodeURIComponent(e).replace(/[!'()~]|%20|%00/g,function(r){return t[r]})}function re(e,t){this._pairs=[],e&&J(e,this,t)}const ve=re.prototype;ve.append=function(t,n){this._pairs.push([t,n])};ve.toString=function(t){const n=t?function(r){return t.call(this,r,de)}:de;return this._pairs.map(function(s){return n(s[0])+"="+n(s[1])},"").join("&")};function Ot(e){return encodeURIComponent(e).replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}function Pe(e,t,n){if(!t)return e;const r=n&&n.encode||Ot,s=n&&n.serialize;let i;if(s?i=s(t,n):i=a.isURLSearchParams(t)?t.toString():new re(t,n).toString(r),i){const o=e.indexOf("#");o!==-1&&(e=e.slice(0,o)),e+=(e.indexOf("?")===-1?"?":"&")+i}return e}class At{constructor(){this.handlers=[]}use(t,n,r){return this.handlers.push({fulfilled:t,rejected:n,synchronous:r?r.synchronous:!1,runWhen:r?r.runWhen:null}),this.handlers.length-1}eject(t){this.handlers[t]&&(this.handlers[t]=null)}clear(){this.handlers&&(this.handlers=[])}forEach(t){a.forEach(this.handlers,function(r){r!==null&&t(r)})}}const fe=At,Ce={silentJSONParsing:!0,forcedJSONParsing:!0,clarifyTimeoutError:!1},Tt=typeof URLSearchParams<"u"?URLSearchParams:re,xt=typeof FormData<"u"?FormData:null,_t=typeof Blob<"u"?Blob:null,Lt={isBrowser:!0,classes:{URLSearchParams:Tt,FormData:xt,Blob:_t},protocols:["http","https","file","blob","url","data"]},De=typeof window<"u"&&typeof document<"u",Nt=(e=>De&&["ReactNative","NativeScript","NS"].indexOf(e)<0)(typeof navigator<"u"&&navigator.product),vt=typeof WorkerGlobalScope<"u"&&self instanceof WorkerGlobalScope&&typeof self.importScripts=="function",Pt=Object.freeze(Object.defineProperty({__proto__:null,hasBrowserEnv:De,hasStandardBrowserEnv:Nt,hasStandardBrowserWebWorkerEnv:vt},Symbol.toStringTag,{value:"Module"})),A={...Pt,...Lt};function Ct(e,t){return J(e,new A.classes.URLSearchParams,Object.assign({visitor:function(n,r,s,i){return A.isNode&&a.isBuffer(n)?(this.append(r,n.toString("base64")),!1):i.defaultVisitor.apply(this,arguments)}},t))}function Dt(e){return a.matchAll(/\w+|\[(\w*)]/g,e).map(t=>t[0]==="[]"?"":t[1]||t[0])}function Ft(e){const t={},n=Object.keys(e);let r;const s=n.length;let i;for(r=0;r<s;r++)i=n[r],t[i]=e[i];return t}function Fe(e){function t(n,r,s,i){let o=n[i++];const c=Number.isFinite(+o),p=i>=n.length;return o=!o&&a.isArray(s)?s.length:o,p?(a.hasOwnProp(s,o)?s[o]=[s[o],r]:s[o]=r,!c):((!s[o]||!a.isObject(s[o]))&&(s[o]=[]),t(n,r,s[o],i)&&a.isArray(s[o])&&(s[o]=Ft(s[o])),!c)}if(a.isFormData(e)&&a.isFunction(e.entries)){const n={};return a.forEachEntry(e,(r,s)=>{t(Dt(r),s,n,0)}),n}return null}function Bt(e,t,n){if(a.isString(e))try{return(t||JSON.parse)(e),a.trim(e)}catch(r){if(r.name!=="SyntaxError")throw r}return(n||JSON.stringify)(e)}const se={transitional:Ce,adapter:["xhr","http"],transformRequest:[function(t,n){const r=n.getContentType()||"",s=r.indexOf("application/json")>-1,i=a.isObject(t);if(i&&a.isHTMLForm(t)&&(t=new FormData(t)),a.isFormData(t))return s&&s?JSON.stringify(Fe(t)):t;if(a.isArrayBuffer(t)||a.isBuffer(t)||a.isStream(t)||a.isFile(t)||a.isBlob(t))return t;if(a.isArrayBufferView(t))return t.buffer;if(a.isURLSearchParams(t))return n.setContentType("application/x-www-form-urlencoded;charset=utf-8",!1),t.toString();let c;if(i){if(r.indexOf("application/x-www-form-urlencoded")>-1)return Ct(t,this.formSerializer).toString();if((c=a.isFileList(t))||r.indexOf("multipart/form-data")>-1){const p=this.env&&this.env.FormData;return J(c?{"files[]":t}:t,p&&new p,this.formSerializer)}}return i||s?(n.setContentType("application/json",!1),Bt(t)):t}],transformResponse:[function(t){const n=this.transitional||se.transitional,r=n&&n.forcedJSONParsing,s=this.responseType==="json";if(t&&a.isString(t)&&(r&&!this.responseType||s)){const o=!(n&&n.silentJSONParsing)&&s;try{return JSON.parse(t)}catch(c){if(o)throw c.name==="SyntaxError"?m.from(c,m.ERR_BAD_RESPONSE,this,null,this.response):c}}return t}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,maxBodyLength:-1,env:{FormData:A.classes.FormData,Blob:A.classes.Blob},validateStatus:function(t){return t>=200&&t<300},headers:{common:{Accept:"application/json, text/plain, */*","Content-Type":void 0}}};a.forEach(["delete","get","head","post","put","patch"],e=>{se.headers[e]={}});const oe=se,Ut=a.toObjectSet(["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"]),jt=e=>{const t={};let n,r,s;return e&&e.split(`
`).forEach(function(o){s=o.indexOf(":"),n=o.substring(0,s).trim().toLowerCase(),r=o.substring(s+1).trim(),!(!n||t[n]&&Ut[n])&&(n==="set-cookie"?t[n]?t[n].push(r):t[n]=[r]:t[n]=t[n]?t[n]+", "+r:r)}),t},pe=Symbol("internals");function C(e){return e&&String(e).trim().toLowerCase()}function j(e){return e===!1||e==null?e:a.isArray(e)?e.map(j):String(e)}function kt(e){const t=Object.create(null),n=/([^\s,;=]+)\s*(?:=\s*([^,;]+))?/g;let r;for(;r=n.exec(e);)t[r[1]]=r[2];return t}const It=e=>/^[-_a-zA-Z0-9^`|~,!#$%&'*+.]+$/.test(e.trim());function K(e,t,n,r,s){if(a.isFunction(r))return r.call(this,t,n);if(s&&(t=n),!!a.isString(t)){if(a.isString(r))return t.indexOf(r)!==-1;if(a.isRegExp(r))return r.test(t)}}function qt(e){return e.trim().toLowerCase().replace(/([a-z\d])(\w*)/g,(t,n,r)=>n.toUpperCase()+r)}function Ht(e,t){const n=a.toCamelCase(" "+t);["get","set","has"].forEach(r=>{Object.defineProperty(e,r+n,{value:function(s,i,o){return this[r].call(this,t,s,i,o)},configurable:!0})})}class V{constructor(t){t&&this.set(t)}set(t,n,r){const s=this;function i(c,p,h){const u=C(p);if(!u)throw new Error("header name must be a non-empty string");const l=a.findKey(s,u);(!l||s[l]===void 0||h===!0||h===void 0&&s[l]!==!1)&&(s[l||p]=j(c))}const o=(c,p)=>a.forEach(c,(h,u)=>i(h,u,p));return a.isPlainObject(t)||t instanceof this.constructor?o(t,n):a.isString(t)&&(t=t.trim())&&!It(t)?o(jt(t),n):t!=null&&i(n,t,r),this}get(t,n){if(t=C(t),t){const r=a.findKey(this,t);if(r){const s=this[r];if(!n)return s;if(n===!0)return kt(s);if(a.isFunction(n))return n.call(this,s,r);if(a.isRegExp(n))return n.exec(s);throw new TypeError("parser must be boolean|regexp|function")}}}has(t,n){if(t=C(t),t){const r=a.findKey(this,t);return!!(r&&this[r]!==void 0&&(!n||K(this,this[r],r,n)))}return!1}delete(t,n){const r=this;let s=!1;function i(o){if(o=C(o),o){const c=a.findKey(r,o);c&&(!n||K(r,r[c],c,n))&&(delete r[c],s=!0)}}return a.isArray(t)?t.forEach(i):i(t),s}clear(t){const n=Object.keys(this);let r=n.length,s=!1;for(;r--;){const i=n[r];(!t||K(this,this[i],i,t,!0))&&(delete this[i],s=!0)}return s}normalize(t){const n=this,r={};return a.forEach(this,(s,i)=>{const o=a.findKey(r,i);if(o){n[o]=j(s),delete n[i];return}const c=t?qt(i):String(i).trim();c!==i&&delete n[i],n[c]=j(s),r[c]=!0}),this}concat(...t){return this.constructor.concat(this,...t)}toJSON(t){const n=Object.create(null);return a.forEach(this,(r,s)=>{r!=null&&r!==!1&&(n[s]=t&&a.isArray(r)?r.join(", "):r)}),n}[Symbol.iterator](){return Object.entries(this.toJSON())[Symbol.iterator]()}toString(){return Object.entries(this.toJSON()).map(([t,n])=>t+": "+n).join(`
`)}get[Symbol.toStringTag](){return"AxiosHeaders"}static from(t){return t instanceof this?t:new this(t)}static concat(t,...n){const r=new this(t);return n.forEach(s=>r.set(s)),r}static accessor(t){const r=(this[pe]=this[pe]={accessors:{}}).accessors,s=this.prototype;function i(o){const c=C(o);r[c]||(Ht(s,o),r[c]=!0)}return a.isArray(t)?t.forEach(i):i(t),this}}V.accessor(["Content-Type","Content-Length","Accept","Accept-Encoding","User-Agent","Authorization"]);a.reduceDescriptors(V.prototype,({value:e},t)=>{let n=t[0].toUpperCase()+t.slice(1);return{get:()=>e,set(r){this[n]=r}}});a.freezeMethods(V);const _=V;function X(e,t){const n=this||oe,r=t||n,s=_.from(r.headers);let i=r.data;return a.forEach(e,function(c){i=c.call(n,i,s.normalize(),t?t.status:void 0)}),s.normalize(),i}function Be(e){return!!(e&&e.__CANCEL__)}function B(e,t,n){m.call(this,e??"canceled",m.ERR_CANCELED,t,n),this.name="CanceledError"}a.inherits(B,m,{__CANCEL__:!0});function Mt(e,t,n){const r=n.config.validateStatus;!n.status||!r||r(n.status)?e(n):t(new m("Request failed with status code "+n.status,[m.ERR_BAD_REQUEST,m.ERR_BAD_RESPONSE][Math.floor(n.status/100)-4],n.config,n.request,n))}const $t=A.hasStandardBrowserEnv?{write(e,t,n,r,s,i){const o=[e+"="+encodeURIComponent(t)];a.isNumber(n)&&o.push("expires="+new Date(n).toGMTString()),a.isString(r)&&o.push("path="+r),a.isString(s)&&o.push("domain="+s),i===!0&&o.push("secure"),document.cookie=o.join("; ")},read(e){const t=document.cookie.match(new RegExp("(^|;\\s*)("+e+")=([^;]*)"));return t?decodeURIComponent(t[3]):null},remove(e){this.write(e,"",Date.now()-864e5)}}:{write(){},read(){return null},remove(){}};function zt(e){return/^([a-z][a-z\d+\-.]*:)?\/\//i.test(e)}function Jt(e,t){return t?e.replace(/\/?\/$/,"")+"/"+t.replace(/^\/+/,""):e}function Ue(e,t){return e&&!zt(t)?Jt(e,t):t}const Vt=A.hasStandardBrowserEnv?function(){const t=/(msie|trident)/i.test(navigator.userAgent),n=document.createElement("a");let r;function s(i){let o=i;return t&&(n.setAttribute("href",o),o=n.href),n.setAttribute("href",o),{href:n.href,protocol:n.protocol?n.protocol.replace(/:$/,""):"",host:n.host,search:n.search?n.search.replace(/^\?/,""):"",hash:n.hash?n.hash.replace(/^#/,""):"",hostname:n.hostname,port:n.port,pathname:n.pathname.charAt(0)==="/"?n.pathname:"/"+n.pathname}}return r=s(window.location.href),function(o){const c=a.isString(o)?s(o):o;return c.protocol===r.protocol&&c.host===r.host}}():function(){return function(){return!0}}();function Wt(e){const t=/^([-+\w]{1,25})(:?\/\/|:)/.exec(e);return t&&t[1]||""}function Kt(e,t){e=e||10;const n=new Array(e),r=new Array(e);let s=0,i=0,o;return t=t!==void 0?t:1e3,function(p){const h=Date.now(),u=r[i];o||(o=h),n[s]=p,r[s]=h;let l=i,E=0;for(;l!==s;)E+=n[l++],l=l%e;if(s=(s+1)%e,s===i&&(i=(i+1)%e),h-o<t)return;const S=u&&h-u;return S?Math.round(E*1e3/S):void 0}}function he(e,t){let n=0;const r=Kt(50,250);return s=>{const i=s.loaded,o=s.lengthComputable?s.total:void 0,c=i-n,p=r(c),h=i<=o;n=i;const u={loaded:i,total:o,progress:o?i/o:void 0,bytes:c,rate:p||void 0,estimated:p&&o&&h?(o-i)/p:void 0,event:s};u[t?"download":"upload"]=!0,e(u)}}const Xt=typeof XMLHttpRequest<"u",Gt=Xt&&function(e){return new Promise(function(n,r){let s=e.data;const i=_.from(e.headers).normalize();let{responseType:o,withXSRFToken:c}=e,p;function h(){e.cancelToken&&e.cancelToken.unsubscribe(p),e.signal&&e.signal.removeEventListener("abort",p)}let u;if(a.isFormData(s)){if(A.hasStandardBrowserEnv||A.hasStandardBrowserWebWorkerEnv)i.setContentType(!1);else if((u=i.getContentType())!==!1){const[f,...w]=u?u.split(";").map(y=>y.trim()).filter(Boolean):[];i.setContentType([f||"multipart/form-data",...w].join("; "))}}let l=new XMLHttpRequest;if(e.auth){const f=e.auth.username||"",w=e.auth.password?unescape(encodeURIComponent(e.auth.password)):"";i.set("Authorization","Basic "+btoa(f+":"+w))}const E=Ue(e.baseURL,e.url);l.open(e.method.toUpperCase(),Pe(E,e.params,e.paramsSerializer),!0),l.timeout=e.timeout;function S(){if(!l)return;const f=_.from("getAllResponseHeaders"in l&&l.getAllResponseHeaders()),y={data:!o||o==="text"||o==="json"?l.responseText:l.response,status:l.status,statusText:l.statusText,headers:f,config:e,request:l};Mt(function(R){n(R),h()},function(R){r(R),h()},y),l=null}if("onloadend"in l?l.onloadend=S:l.onreadystatechange=function(){!l||l.readyState!==4||l.status===0&&!(l.responseURL&&l.responseURL.indexOf("file:")===0)||setTimeout(S)},l.onabort=function(){l&&(r(new m("Request aborted",m.ECONNABORTED,e,l)),l=null)},l.onerror=function(){r(new m("Network Error",m.ERR_NETWORK,e,l)),l=null},l.ontimeout=function(){let w=e.timeout?"timeout of "+e.timeout+"ms exceeded":"timeout exceeded";const y=e.transitional||Ce;e.timeoutErrorMessage&&(w=e.timeoutErrorMessage),r(new m(w,y.clarifyTimeoutError?m.ETIMEDOUT:m.ECONNABORTED,e,l)),l=null},A.hasStandardBrowserEnv&&(c&&a.isFunction(c)&&(c=c(e)),c||c!==!1&&Vt(E))){const f=e.xsrfHeaderName&&e.xsrfCookieName&&$t.read(e.xsrfCookieName);f&&i.set(e.xsrfHeaderName,f)}s===void 0&&i.setContentType(null),"setRequestHeader"in l&&a.forEach(i.toJSON(),function(w,y){l.setRequestHeader(y,w)}),a.isUndefined(e.withCredentials)||(l.withCredentials=!!e.withCredentials),o&&o!=="json"&&(l.responseType=e.responseType),typeof e.onDownloadProgress=="function"&&l.addEventListener("progress",he(e.onDownloadProgress,!0)),typeof e.onUploadProgress=="function"&&l.upload&&l.upload.addEventListener("progress",he(e.onUploadProgress)),(e.cancelToken||e.signal)&&(p=f=>{l&&(r(!f||f.type?new B(null,e,l):f),l.abort(),l=null)},e.cancelToken&&e.cancelToken.subscribe(p),e.signal&&(e.signal.aborted?p():e.signal.addEventListener("abort",p)));const d=Wt(E);if(d&&A.protocols.indexOf(d)===-1){r(new m("Unsupported protocol "+d+":",m.ERR_BAD_REQUEST,e));return}l.send(s||null)})},Z={http:St,xhr:Gt};a.forEach(Z,(e,t)=>{if(e){try{Object.defineProperty(e,"name",{value:t})}catch{}Object.defineProperty(e,"adapterName",{value:t})}});const me=e=>`- ${e}`,Yt=e=>a.isFunction(e)||e===null||e===!1,je={getAdapter:e=>{e=a.isArray(e)?e:[e];const{length:t}=e;let n,r;const s={};for(let i=0;i<t;i++){n=e[i];let o;if(r=n,!Yt(n)&&(r=Z[(o=String(n)).toLowerCase()],r===void 0))throw new m(`Unknown adapter '${o}'`);if(r)break;s[o||"#"+i]=r}if(!r){const i=Object.entries(s).map(([c,p])=>`adapter ${c} `+(p===!1?"is not supported by the environment":"is not available in the build"));let o=t?i.length>1?`since :
`+i.map(me).join(`
`):" "+me(i[0]):"as no adapter specified";throw new m("There is no suitable adapter to dispatch the request "+o,"ERR_NOT_SUPPORT")}return r},adapters:Z};function G(e){if(e.cancelToken&&e.cancelToken.throwIfRequested(),e.signal&&e.signal.aborted)throw new B(null,e)}function ye(e){return G(e),e.headers=_.from(e.headers),e.data=X.call(e,e.transformRequest),["post","put","patch"].indexOf(e.method)!==-1&&e.headers.setContentType("application/x-www-form-urlencoded",!1),je.getAdapter(e.adapter||oe.adapter)(e).then(function(r){return G(e),r.data=X.call(e,e.transformResponse,r),r.headers=_.from(r.headers),r},function(r){return Be(r)||(G(e),r&&r.response&&(r.response.data=X.call(e,e.transformResponse,r.response),r.response.headers=_.from(r.response.headers))),Promise.reject(r)})}const Ee=e=>e instanceof _?e.toJSON():e;function v(e,t){t=t||{};const n={};function r(h,u,l){return a.isPlainObject(h)&&a.isPlainObject(u)?a.merge.call({caseless:l},h,u):a.isPlainObject(u)?a.merge({},u):a.isArray(u)?u.slice():u}function s(h,u,l){if(a.isUndefined(u)){if(!a.isUndefined(h))return r(void 0,h,l)}else return r(h,u,l)}function i(h,u){if(!a.isUndefined(u))return r(void 0,u)}function o(h,u){if(a.isUndefined(u)){if(!a.isUndefined(h))return r(void 0,h)}else return r(void 0,u)}function c(h,u,l){if(l in t)return r(h,u);if(l in e)return r(void 0,h)}const p={url:i,method:i,data:i,baseURL:o,transformRequest:o,transformResponse:o,paramsSerializer:o,timeout:o,timeoutMessage:o,withCredentials:o,withXSRFToken:o,adapter:o,responseType:o,xsrfCookieName:o,xsrfHeaderName:o,onUploadProgress:o,onDownloadProgress:o,decompress:o,maxContentLength:o,maxBodyLength:o,beforeRedirect:o,transport:o,httpAgent:o,httpsAgent:o,cancelToken:o,socketPath:o,responseEncoding:o,validateStatus:c,headers:(h,u)=>s(Ee(h),Ee(u),!0)};return a.forEach(Object.keys(Object.assign({},e,t)),function(u){const l=p[u]||s,E=l(e[u],t[u],u);a.isUndefined(E)&&l!==c||(n[u]=E)}),n}const ke="1.6.3",ie={};["object","boolean","number","function","string","symbol"].forEach((e,t)=>{ie[e]=function(r){return typeof r===e||"a"+(t<1?"n ":" ")+e}});const be={};ie.transitional=function(t,n,r){function s(i,o){return"[Axios v"+ke+"] Transitional option '"+i+"'"+o+(r?". "+r:"")}return(i,o,c)=>{if(t===!1)throw new m(s(o," has been removed"+(n?" in "+n:"")),m.ERR_DEPRECATED);return n&&!be[o]&&(be[o]=!0,console.warn(s(o," has been deprecated since v"+n+" and will be removed in the near future"))),t?t(i,o,c):!0}};function Qt(e,t,n){if(typeof e!="object")throw new m("options must be an object",m.ERR_BAD_OPTION_VALUE);const r=Object.keys(e);let s=r.length;for(;s-- >0;){const i=r[s],o=t[i];if(o){const c=e[i],p=c===void 0||o(c,i,e);if(p!==!0)throw new m("option "+i+" must be "+p,m.ERR_BAD_OPTION_VALUE);continue}if(n!==!0)throw new m("Unknown option "+i,m.ERR_BAD_OPTION)}}const ee={assertOptions:Qt,validators:ie},L=ee.validators;class I{constructor(t){this.defaults=t,this.interceptors={request:new fe,response:new fe}}request(t,n){typeof t=="string"?(n=n||{},n.url=t):n=t||{},n=v(this.defaults,n);const{transitional:r,paramsSerializer:s,headers:i}=n;r!==void 0&&ee.assertOptions(r,{silentJSONParsing:L.transitional(L.boolean),forcedJSONParsing:L.transitional(L.boolean),clarifyTimeoutError:L.transitional(L.boolean)},!1),s!=null&&(a.isFunction(s)?n.paramsSerializer={serialize:s}:ee.assertOptions(s,{encode:L.function,serialize:L.function},!0)),n.method=(n.method||this.defaults.method||"get").toLowerCase();let o=i&&a.merge(i.common,i[n.method]);i&&a.forEach(["delete","get","head","post","put","patch","common"],d=>{delete i[d]}),n.headers=_.concat(o,i);const c=[];let p=!0;this.interceptors.request.forEach(function(f){typeof f.runWhen=="function"&&f.runWhen(n)===!1||(p=p&&f.synchronous,c.unshift(f.fulfilled,f.rejected))});const h=[];this.interceptors.response.forEach(function(f){h.push(f.fulfilled,f.rejected)});let u,l=0,E;if(!p){const d=[ye.bind(this),void 0];for(d.unshift.apply(d,c),d.push.apply(d,h),E=d.length,u=Promise.resolve(n);l<E;)u=u.then(d[l++],d[l++]);return u}E=c.length;let S=n;for(l=0;l<E;){const d=c[l++],f=c[l++];try{S=d(S)}catch(w){f.call(this,w);break}}try{u=ye.call(this,S)}catch(d){return Promise.reject(d)}for(l=0,E=h.length;l<E;)u=u.then(h[l++],h[l++]);return u}getUri(t){t=v(this.defaults,t);const n=Ue(t.baseURL,t.url);return Pe(n,t.params,t.paramsSerializer)}}a.forEach(["delete","get","head","options"],function(t){I.prototype[t]=function(n,r){return this.request(v(r||{},{method:t,url:n,data:(r||{}).data}))}});a.forEach(["post","put","patch"],function(t){function n(r){return function(i,o,c){return this.request(v(c||{},{method:t,headers:r?{"Content-Type":"multipart/form-data"}:{},url:i,data:o}))}}I.prototype[t]=n(),I.prototype[t+"Form"]=n(!0)});const k=I;class ae{constructor(t){if(typeof t!="function")throw new TypeError("executor must be a function.");let n;this.promise=new Promise(function(i){n=i});const r=this;this.promise.then(s=>{if(!r._listeners)return;let i=r._listeners.length;for(;i-- >0;)r._listeners[i](s);r._listeners=null}),this.promise.then=s=>{let i;const o=new Promise(c=>{r.subscribe(c),i=c}).then(s);return o.cancel=function(){r.unsubscribe(i)},o},t(function(i,o,c){r.reason||(r.reason=new B(i,o,c),n(r.reason))})}throwIfRequested(){if(this.reason)throw this.reason}subscribe(t){if(this.reason){t(this.reason);return}this._listeners?this._listeners.push(t):this._listeners=[t]}unsubscribe(t){if(!this._listeners)return;const n=this._listeners.indexOf(t);n!==-1&&this._listeners.splice(n,1)}static source(){let t;return{token:new ae(function(s){t=s}),cancel:t}}}const Zt=ae;function en(e){return function(n){return e.apply(null,n)}}function tn(e){return a.isObject(e)&&e.isAxiosError===!0}const te={Continue:100,SwitchingProtocols:101,Processing:102,EarlyHints:103,Ok:200,Created:201,Accepted:202,NonAuthoritativeInformation:203,NoContent:204,ResetContent:205,PartialContent:206,MultiStatus:207,AlreadyReported:208,ImUsed:226,MultipleChoices:300,MovedPermanently:301,Found:302,SeeOther:303,NotModified:304,UseProxy:305,Unused:306,TemporaryRedirect:307,PermanentRedirect:308,BadRequest:400,Unauthorized:401,PaymentRequired:402,Forbidden:403,NotFound:404,MethodNotAllowed:405,NotAcceptable:406,ProxyAuthenticationRequired:407,RequestTimeout:408,Conflict:409,Gone:410,LengthRequired:411,PreconditionFailed:412,PayloadTooLarge:413,UriTooLong:414,UnsupportedMediaType:415,RangeNotSatisfiable:416,ExpectationFailed:417,ImATeapot:418,MisdirectedRequest:421,UnprocessableEntity:422,Locked:423,FailedDependency:424,TooEarly:425,UpgradeRequired:426,PreconditionRequired:428,TooManyRequests:429,RequestHeaderFieldsTooLarge:431,UnavailableForLegalReasons:451,InternalServerError:500,NotImplemented:501,BadGateway:502,ServiceUnavailable:503,GatewayTimeout:504,HttpVersionNotSupported:505,VariantAlsoNegotiates:506,InsufficientStorage:507,LoopDetected:508,NotExtended:510,NetworkAuthenticationRequired:511};Object.entries(te).forEach(([e,t])=>{te[t]=e});const nn=te;function Ie(e){const t=new k(e),n=we(k.prototype.request,t);return a.extend(n,k.prototype,t,{allOwnKeys:!0}),a.extend(n,t,null,{allOwnKeys:!0}),n.create=function(s){return Ie(v(e,s))},n}const b=Ie(oe);b.Axios=k;b.CanceledError=B;b.CancelToken=Zt;b.isCancel=Be;b.VERSION=ke;b.toFormData=J;b.AxiosError=m;b.Cancel=b.CanceledError;b.all=function(t){return Promise.all(t)};b.spread=en;b.isAxiosError=tn;b.mergeConfig=v;b.AxiosHeaders=_;b.formToJSON=e=>Fe(a.isHTMLForm(e)?new FormData(e):e);b.getAdapter=je.getAdapter;b.HttpStatusCode=nn;b.default=b;const rn=b;window.axios=rn;window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest";$(document).ready(function(){M.updateTextFields(),$("select").formSelect(),$(".datepicker").datepicker(),document.querySelector(".menu").addEventListener("click",e);function e(){document.querySelector(".nav-info").classList.toggle("active")}let t=0,n=0;const r=document.getElementById("people"),s=document.getElementById("room"),i=document.getElementById("phone");document.querySelectorAll(".age_input");const o=document.getElementById("persons_section");r.addEventListener("focus",p),r.addEventListener("blur",h),r.addEventListener("input",c),s.addEventListener("input",c),i.addEventListener("input",c);function c(){r.value=r.value.replace(/[^0-9]/g,""),s.value=s.value.replace(/[^0-9]/g,""),i.value=i.value.replace(/[^0-9]/g,"")}function p(){t=0,o.classList.contains("animate__fadeInLeft")?o.classList.remove("animate__animated","animate__fadeInLeft"):o.classList.remove("animate__animated","animate__fadeInRight")}function h(){isNaN(n)||(n=r.value,o.innerHTML="",document.body.classList.contains("ar")?o.classList.add("animate__animated","animate__fadeInRight"):o.classList.add("animate__animated","animate__fadeInLeft"));for(let y=0;y<n;y++){++t;let g=`<div class="theard-section"><div class="label">شخص ${t}</div><div><div class="full-name"><input placeholder="الاسم واللقب" name='fullname[]' id="fullname-${t}" type="text" class="validate"></div><div class="age"><input placeholder="العمر" name="age[]" id="age-${t}" type="text" class="validate age_input"></div><div class="input-field passport"><input placeholder="رقم جواز السفر" id="passport-${t}" type="text" class="validate" name="number_passport[]"></div><div class="nationality"><input placeholder="الجنسية" id="nationality-${t}" name="nationality[]" type="text" class="validate nationality"></div></div></div>`,R=`<div class="theard-section"><div class="label">person ${t}</div><div><div class="full-name"><input placeholder="name and surname" name='fullname[]' id="fullname-${t}" type="text" class="validate"></div><div class="age"><input placeholder="age" name="age[]" id="age-${t}" type="text" class="validate age_input"></div><div class="input-field passport"><input placeholder="N.passport" id="passport-${t}" type="text" class="validate" name="number_passport[]"></div><div class="nationality"><input placeholder="nationality" id="nationality-${t}" name="nationality[]" type="text" class="validate nationality"></div></div></div>`,x=`<div class="theard-section"><div class="label">personne ${t}</div><div><div class="full-name"><input placeholder="Nom et Prénom" name='fullname[]' id="fullname-${t}" type="text" class="validate"></div><div class="age"><input placeholder="âge" name="age[]" id="age-${t}" type="text" class="validate age_input"></div><div class="input-field passport"><input placeholder="N.passeport" id="passport-${t}" type="text" class="validate" name="number_passport[]"></div><div class="nationality"><input placeholder="nationalité" id="nationality-${t}" name="nationality[]" type="text" class="validate nationality"></div></div></div>`;document.body.classList.contains("ar")?o.innerHTML+=g:document.body.classList.contains("en")?o.innerHTML+=R:o.innerHTML+=x,document.querySelectorAll(".age_input").forEach(N=>{N.addEventListener("input",()=>{N.value=N.value.replace(/[^0-9]/g,"")})})}}let u=new Date().getFullYear();document.getElementById("year").innerHTML=u;function l(){const y=new Date,g=y.getFullYear(),R=String(y.getMonth()+1).padStart(2,"0"),x=String(y.getDate()).padStart(2,"0");return`${g}-${R}-${x}`}const E=document.getElementById("checkin"),S=document.getElementById("checkout");E.min=l(),S.min=l(),E.addEventListener("input",d),S.addEventListener("input",d);function d(){const y=new Date(E.value),R=new Date(S.value)-y,x=Math.floor(R/(1e3*60*60*24));if(console.log(x),!isNaN(x)){const N=document.getElementById("dateDifference");document.querySelector(".days").innerHTML=x,N.classList.contains("show")||(N.classList.add("show"),document.querySelector(".bar_last").classList.add("show"))}}const f=document.getElementById("yes"),w=document.getElementById("no");f.addEventListener("change",()=>{document.querySelector(".flight_div").classList.contains("hide")&&(document.querySelectorAll(".bar.delivery")[0].classList.remove("hide"),document.querySelectorAll(".bar.delivery")[1].classList.remove("hide"),document.querySelector(".flight_div").classList.remove("hide"),document.querySelector(".arrival_div").classList.remove("hide"))}),w.addEventListener("change",()=>{document.querySelector(".flight_div").classList.contains("hide")||(document.querySelectorAll(".bar.delivery")[0].classList.add("hide"),document.querySelectorAll(".bar.delivery")[1].classList.add("hide"),document.querySelector(".flight_div").classList.add("hide"),document.querySelector(".arrival_div").classList.add("hide"))})});
