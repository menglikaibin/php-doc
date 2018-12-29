<?php

/**
*<div id="function.strtr" class="refentry">  <div class="refnamediv">   <h1 class="refname">strtr</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">strtr</span> &mdash; <span class="dc-title">转换指定字符</span></p>   </div>    <div class="refsect1 description" id="refsect1-function.strtr-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>strtr</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$str</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$from</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$to</code></span>    )</div>    <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>strtr</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$str</code></span>    , <span class="methodparam"><span class="type">array</span> <code class="parameter">$replace_pairs</code></span>    )</div>    <p class="para rdfs-comment">    该函数返回 <code class="parameter">str</code> 的一个副本，并将在 <code class="parameter">from</code> 中指定的字符转换为 <code class="parameter">to</code> 中相应的字符。    比如， <em>$from[$n]</em>中每次的出现都会被替换为    <em>$to[$n]</em>，其中 <em>$n</em> 是两个参数都有效的位移(offset)。   </p>   <p class="para">    如果 <code class="parameter">from</code> 与 <code class="parameter">to</code> 长度不相等，那么多余的字符部分将被忽略。 <code class="parameter">str</code> 的长度将会和返回的值一样。   </p>   <p class="para">    If given two arguments, the second should be an <span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span> in the    form <em>array(&#039;from&#039; =&gt; &#039;to&#039;, ...)</em>. The return value is    a <span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span> where all the occurrences of the array keys have been    replaced by the corresponding values. The longest keys will be tried first.    Once a substring has been replaced, its new value will not be searched    again.   </p>   <p class="para">    In this case, the keys and the values may have any length, provided that    there is no empty key; additionally, the length of the return value may    differ from that of <code class="parameter">str</code>.    However, this function will be the most efficient when all the keys have the    same size.   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.strtr-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">str</code></dt>       <dd>        <p class="para">        待转换的<span class="type"><span class="type 字符串">字符串</span></span>。       </p>      </dd>                 <dt> <code class="parameter">from</code></dt>       <dd>        <p class="para">        <span class="type"><span class="type 字符串">字符串</span></span>中与将要被转换的目的字符 <code class="parameter">to</code> 相对应的源字符。       </p>      </dd>                 <dt> <code class="parameter">to</code></dt>       <dd>        <p class="para">        <span class="type"><span class="type 字符串">字符串</span></span>中与将要被转换的字符 <code class="parameter">from</code> 相对应的目的字符。       </p>      </dd>                 <dt> <code class="parameter">replace_pairs</code></dt>       <dd>        <p class="para">        参数 <code class="parameter">replace_pairs</code> 可以用来取代 <code class="parameter">to</code> 和 <code class="parameter">from</code> 参数，因为它是以  <em>array(&#039;from&#039; =&gt; &#039;to&#039;, ...)</em> 格式出现的数组。       </p>      </dd>          </dl>    </p>  </div>     <div class="refsect1 returnvalues" id="refsect1-function.strtr-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回转换后的<span class="type"><span class="type 字符串">字符串</span></span>。   </p>   <p class="para">    如果 <code class="parameter">replace_pairs</code> 中包含一个空<span class="type"><span class="type 字符串">字符串</span></span>（<em>&quot;&quot;</em>）键，那么将返回 <strong><code>FALSE</code></strong>。    If the <code class="parameter">str</code> is not a scalar    then it is not typecasted into a string, instead a warning is raised and     <strong><code>NULL</code></strong> is returned.    </p>  </div>    <div class="refsect1 examples" id="refsect1-function.strtr-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-5983">     <p><strong>Example #1 <span class="function"><strong>strtr()</strong></span> 范例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$addr&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">strtr</span><span style="color: #007700">(</span><span style="color: #9876AA">$addr</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"äåö"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"aao"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>   <p class="para">    The next example shows the behavior of <span class="function"><strong>strtr()</strong></span> when    called with only two arguments. Note the preference of the replacements    (<em>&quot;h&quot;</em> is not picked because there are longer matches)    and how replaced text was not searched again.   </p>   <div class="example" id="example-5984">    <p><strong>Example #2 使用两个参数的 <span class="function"><strong>strtr()</strong></span> 范例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$trans&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">"hello"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"hi"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"hi"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"hello"</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">strtr</span><span style="color: #007700">(</span><span style="color: #DD0000">"hi&nbsp;all,&nbsp;I&nbsp;said&nbsp;hello"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$trans</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> hello all, I said hi </pre></div>     </div>   </div>   <p class="para">    The two modes of behavior are substantially different. With three arguments,    <span class="function"><strong>strtr()</strong></span> will replace bytes; with two, it may replace    longer substrings.   </p>   <div class="example" id="example-5985">    <p><strong>Example #3 <span class="function"><strong>strtr()</strong></span> behavior comparison</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">strtr</span><span style="color: #007700">(</span><span style="color: #DD0000">"baab"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"ab"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"01"</span><span style="color: #007700">),</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">$trans&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">"ab"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"01"</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">strtr</span><span style="color: #007700">(</span><span style="color: #DD0000">"baab"</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$trans</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> 1001 ba01 </pre></div>     </div>   </div>  </div>    <div class="refsect1 seealso" id="refsect1-function.strtr-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link str_replace()} - 子字符串替换</span></li>     <li class="member"><span class="function">{@link preg_replace()} - 执行一个正则表达式的搜索和替换</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.strings.php">字符串 函数</a></div></div>
 * @return string A copy of str, translating all occurrences of each character in from to the corresponding character in to.*/
function strtr ($str, array $replace_pairs) {};

/**
 * (PHP 5.1)<br/>
 * Halts the execution of the compiler. This can be useful to embed data in PHP scripts, like the installation files.
 * Byte position of the data start can be determined by the __COMPILER_HALT_OFFSET__ constant
 * which is defined only if there is a __halt_compiler() presented in the file.
 * <p> Note: __halt_compiler() can only be used from the outermost scope.
 * @link http://php.net/manual/en/function.halt-compiler.php
 * @return void
 */
function PS_UNRESERVE_PREFIX___halt_compiler(){}

/**
 * (PHP 5.1)<br/>
 * Byte position of the data start, defined only if there is a __halt_compiler() presented in the file.
 * @link http://php.net/manual/en/function.halt-compiler.php
 * @return void
 */
define("__COMPILER_HALT_OFFSET__",0);


/**
*<div id="function.hex2bin" class="refentry">  <div class="refnamediv">   <h1 class="refname">hex2bin</h1>   <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7)</p><p class="refpurpose"><span class="refname">hex2bin</span> &mdash; <span class="dc-title">转换十六进制字符串为二进制字符串</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.hex2bin-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>hex2bin</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$data</code></span>    )</div>    <p class="para rdfs-comment">    转换十六进制字符串为二进制字符串。   </p>   <div class="caution"><strong class="caution">Caution</strong>    <p class="para">     这个函数<em class="emphasis">不是</em> 转换十六进制数字为二进制数字。这种转换可以使用<span class="function">{@link base_convert()}</span> 函数。    </p>   </div>  </div>    <div class="refsect1 parameters" id="refsect1-function.hex2bin-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">data</code></dt>      <dd>       <p class="para">       十六进制表示的数据      </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.hex2bin-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回给定数据的二进制表示  或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 errors" id="refsect1-function.hex2bin-errors">   <h3 class="title">错误／异常</h3>   <p class="para">    如果输入的十六进制字符串是奇数长数或者无效的十六进制字符串将会抛出    <strong><code>E_WARNING</code></strong> 级别的错误。   </p>  </div>    <div class="refsect1 changelog" id="refsect1-function.hex2bin-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.5.1</td>        <td>         如果输入的字符串是无效的十六进制字符串则抛出一个警告，        </td>       </tr>        <tr>        <td>5.4.4</td>        <td>         如果输入的字符串有多余将抛出异常。 PHP 5.4.0 起字符串将被静默地接受，但是最后的字节会被截断。        </td>       </tr>       </tbody>         </table>    </p>  </div>    <div class="refsect1 examples" id="refsect1-function.hex2bin-examples">   <h3 class="title">范例</h3>   <div class="example" id="example-5904">    <p><strong>Example #1 <span class="function"><strong>hex2bin()</strong></span> 例子</strong></p>    <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$hex&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">hex2bin</span><span style="color: #007700">(</span><span style="color: #DD0000">"6578616d706c65206865782064617461"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$hex</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>    </div>     <div class="example-contents"><p>以上例程的输出类似于：</p></div>    <div class="example-contents screen"> <div class="cdata"><pre> string(16) &quot;example hex data&quot; </pre></div>    </div>   </div>  </div>    <div class="refsect1 seealso" id="refsect1-function.hex2bin-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link bin2hex()} - 函数把包含数据的二进制字符串转换为十六进制值</span></li>     <li class="member"><span class="function">{@link unpack()} - Unpack data from binary string</span></li>    </ul>   </p>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.strings.php">字符串 函数</a></div></div>
 * @return bool|string The binary representation of the given data or <b>FALSE</b> on failure.*/
function hex2bin($data) {};

/**
*<div id="function.fastcgi-finish-request" class="refentry">  <div class="refnamediv">   <h1 class="refname">fastcgi_finish_request</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.3, PHP 7)</p><p class="refpurpose"><span class="refname">fastcgi_finish_request</span> &mdash; <span class="dc-title">冲刷(flush)所有响应的数据给客户端</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.fastcgi-finish-request-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">boolean</span> <span class="methodname"><strong>fastcgi_finish_request</strong></span>     ( <span class="methodparam">void</span>    )</div>    <p class="para rdfs-comment">    此函数冲刷(flush)所有响应的数据给客户端并结束请求。    这使得客户端结束连接后，需要大量时间运行的任务能够继续运行。   </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.fastcgi-finish-request-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.fpm.php">FPM 函数</a></div></div>
 * @return boolean Returns TRUE on success or FALSE on failure.*/
function fastcgi_finish_request() {};

/**
*<div id="function.http-response-code" class="refentry">  <div class="refnamediv">   <h1 class="refname">http_response_code</h1>   <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7)</p><p class="refpurpose"><span class="refname">http_response_code</span> &mdash; <span class="dc-title">获取/设置响应的 HTTP 状态码</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.http-response-code-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>http_response_code</strong></span>     ([ <span class="methodparam"><span class="type">int</span> <code class="parameter">$response_code</code></span>   ] )</div>    <p class="para rdfs-comment">    获取或者设置响应的 HTTP 状态码。   </p>  </div>    <div class="refsect1 parameters" id="refsect1-function.http-response-code-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">response_code</code></dt>       <dd>        <p class="para">        可选的 <code class="parameter">response_code</code> 会设置响应的状态码。       </p>      </dd>             </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.http-response-code-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    如果提供了 <code class="parameter">response_code</code>，将返回先前的状态码。    如果未提供 <code class="parameter">response_code</code>，会返回当前的状态码。    在 Web 服务器环境里，这些状态码的默认值都是 <em>200</em>。   </p>   <p class="para">    如果在非 Web 服务器环境里调用（比如 CLI 应用里），    不提供 <code class="parameter">response_code</code> 就会返回 <strong><code>FALSE</code></strong> 。    在非 Web 服务器环境里，提供 <code class="parameter">response_code</code>  会返回 <strong><code>TRUE</code></strong>     （仅仅在先前没有设置过状态码的时候）。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.http-response-code-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-5492">     <p><strong>Example #1 Web 服务器环境内使用 <span class="function"><strong>http_response_code()</strong></span></strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br /></span><span style="color: #FF8000">//&nbsp;获取当前状态码，并设置新的状态码<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">http_response_code</span><span style="color: #007700">(</span><span style="color: #9876AA">404</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//获取新的状态码<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">http_response_code</span><span style="color: #007700">());<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> int(200) int(404) </pre></div>     </div>    </div>    <div class="example" id="example-5493">     <p><strong>Example #2 在 CLI 环境内使用 <span class="function"><strong>http_response_code()</strong></span></strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br /></span><span style="color: #FF8000">//&nbsp;获取当前默认的响应状态码&nbsp;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">http_response_code</span><span style="color: #007700">());<br /><br /></span><span style="color: #FF8000">//&nbsp;设置状态码<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">http_response_code</span><span style="color: #007700">(</span><span style="color: #9876AA">201</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;获取新的状态码<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">http_response_code</span><span style="color: #007700">());<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> bool(false) bool(true) int(201) </pre></div>     </div>    </div>   </p>  </div>     <div class="refsect1 seealso" id="refsect1-function.http-response-code-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link header()} - 发送原生 HTTP 头</span></li>     <li class="member"><span class="function">{@link headers_list()} - 返回已发送的 HTTP 响应头（或准备发送的）</span></li>    </ul>   </p>  </div>     <div class="up"><a href="http://php.net/manual/zh/ref.network.php">网络 函数</a></div></div>
 * @return int The current response code. By default the return value is int(200).*/
function http_response_code($response_code) {}
