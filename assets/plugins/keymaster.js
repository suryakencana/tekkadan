!function(e){function n(e,n){for(var t=e.length;t--;)if(e[t]===n)return t;return-1}function t(e,n){if(e.length!=n.length)return!1;for(var t=0;t<e.length;t++)if(e[t]!==n[t])return!1;return!0}function o(e){for(m in b)b[m]=e[T[m]]}function r(e){var t,r,i,l,c,u;if(t=e.keyCode,-1==n(S,t)&&S.push(t),(93==t||224==t)&&(t=91),t in b){b[t]=!0;for(i in C)C[i]==t&&(f[i]=!0)}else if(o(e),f.filter.call(this,e)&&t in E)for(u=p(),l=0;l<E[t].length;l++)if(r=E[t][l],r.scope==u||"all"==r.scope){c=r.mods.length>0;for(i in b)(!b[i]&&n(r.mods,+i)>-1||b[i]&&-1==n(r.mods,+i))&&(c=!1);(0!=r.mods.length||b[16]||b[18]||b[17]||b[91])&&!c||r.method(e,r)===!1&&(e.preventDefault?e.preventDefault():e.returnValue=!1,e.stopPropagation&&e.stopPropagation(),e.cancelBubble&&(e.cancelBubble=!0))}}function i(e){var t,o=e.keyCode,r=n(S,o);if(0>r||S.splice(r,1),(93==o||224==o)&&(o=91),o in b){b[o]=!1;for(t in C)C[t]==o&&(f[t]=!1)}}function l(){for(m in b)b[m]=!1;for(m in C)f[m]=!1}function f(e,n,t){var o,r;o=g(e),void 0===t&&(t=n,n="all");for(var i=0;i<o.length;i++)r=[],e=o[i].split("+"),e.length>1&&(r=v(e),e=[e[e.length-1]]),e=e[0],e=P(e),e in E||(E[e]=[]),E[e].push({shortcut:o[i],scope:n,method:t,key:o[i],mods:r})}function c(e,n){var o,r,i,l,f,c=[];for(o=g(e),l=0;l<o.length;l++){if(r=o[l].split("+"),r.length>1&&(c=v(r)),e=r[r.length-1],e=P(e),void 0===n&&(n=p()),!E[e])return;for(i=0;i<E[e].length;i++)f=E[e][i],f.scope===n&&t(f.mods,c)&&(E[e][i]={})}}function u(e){return"string"==typeof e&&(e=P(e)),-1!=n(S,e)}function a(){return S.slice(0)}function s(e){var n=(e.target||e.srcElement).tagName;return!("INPUT"==n||"SELECT"==n||"TEXTAREA"==n)}function d(e){w=e||"all"}function p(){return w||"all"}function h(e){var n,t,o;for(n in E)for(t=E[n],o=0;o<t.length;)t[o].scope===e?t.splice(o,1):o++}function g(e){var n;return e=e.replace(/\s/g,""),n=e.split(","),""==n[n.length-1]&&(n[n.length-2]+=","),n}function v(e){for(var n=e.slice(0,e.length-1),t=0;t<n.length;t++)n[t]=C[n[t]];return n}function y(e,n,t){e.addEventListener?e.addEventListener(n,t,!1):e.attachEvent&&e.attachEvent("on"+n,function(){t(window.event)})}function k(){var n=e.key;return e.key=A,n}var m,E={},b={16:!1,18:!1,17:!1,91:!1},w="all",C={"⇧":16,shift:16,"⌥":18,alt:18,option:18,"⌃":17,ctrl:17,control:17,"⌘":91,command:91},K={backspace:8,tab:9,clear:12,enter:13,"return":13,esc:27,escape:27,space:32,left:37,up:38,right:39,down:40,del:46,"delete":46,home:36,end:35,pageup:33,pagedown:34,",":188,".":190,"/":191,"`":192,"-":189,"=":187,";":186,"'":222,"[":219,"]":221,"\\":220},P=function(e){return K[e]||e.toUpperCase().charCodeAt(0)},S=[];for(m=1;20>m;m++)K["f"+m]=111+m;var T={16:"shiftKey",18:"altKey",17:"ctrlKey",91:"metaKey"};for(m in C)f[m]=!1;y(document,"keydown",function(e){r(e)}),y(document,"keyup",i),y(window,"focus",l);var A=e.key;e.key=f,e.key.setScope=d,e.key.getScope=p,e.key.deleteScope=h,e.key.filter=s,e.key.isPressed=u,e.key.getPressedKeyCodes=a,e.key.noConflict=k,e.key.unbind=c,"undefined"!=typeof module&&(module.exports=f)}(this);