<?php

/**
*<div id="function.bzopen" class="refentry">  <div class="refnamediv">   <h1 class="refname">bzopen</h1>   <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bzopen</span> &mdash; <span class="dc-title">打开 bzip2 压缩文件</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.bzopen-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">resource</span> <span class="methodname" style="color:#CC7832"><strong>bzopen</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$file</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$mode</span></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">bzopen()</strong></span> 打开一个 bzip2（.bz2）文件用于读或写。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.bzopen-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">file</span></dt>       <dd>        <p class="para">        待打开的文件的文件名，或者已经存在的资源流。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">mode</span></dt>       <dd>        <p class="para">        支持 &#039;r&#039;（读）和 &#039;w&#039;（写）模式。        其他任何模式都会导致 <span class="function"><strong style="color:#CC7832">bzopen()</strong></span> 返回 <strong><span>FALSE</span></strong>。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.bzopen-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    如果打开失败，<span class="function"><strong style="color:#CC7832">bzopen()</strong></span> 会返回 <strong><span>FALSE</span></strong>，否则返回一个指向最新打开文件的指针。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.bzopen-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-697">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">bzopen()</strong></span> 范例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"/tmp/foo.bz2"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$bz&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">bzopen</span><span style="color: #007700">(</span><span style="color: #9876AA">$file</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"r"</span><span style="color: #007700">)&nbsp;or&nbsp;die(</span><span style="color: #DD0000">"Couldn't&nbsp;open&nbsp;</span><span style="color: #9876AA">$file</span><span style="color: #DD0000">&nbsp;for&nbsp;reading"</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">bzclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$bz</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.bzopen-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link bzclose()} - 关闭一个 bzip2 文件</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.bzip2.php">Bzip2 函数</a></div></div>
 * @return resource If the open fails, <b>bzopen</b> returns <b>FALSE</b>, otherwise*/
function bzopen ($filename, $mode) {}

/**
*<div id="function.bzread" class="refentry">  <div class="refnamediv">   <h1 class="refname">bzread</h1>   <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bzread</span> &mdash; <span class="dc-title">bzip2 文件二进制安全地读取</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.bzread-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>bzread</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$bz</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$length</span><span class="initializer"> = 1024</span></span>   ] )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">bzread()</strong></span> 从指定的 bzip2 文件指针中读取数据。   </p>   <p class="para">     读取到 <span class="parameter" style="color:#2EACF9">length</span>（未经压缩的长度）个字节，或者到文件尾，取决于先到哪个。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.bzread-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">bz</span></dt>       <dd>        <p class="para">        文件指针。它必须是有效的并且指向 <span class="function">{@link bzopen()}</span> 成功打开的文件。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">length</span></dt>       <dd>        <p class="para">        如果没有提供， <span class="function"><strong style="color:#CC7832">bzread()</strong></span> 一次会读入 1024 个字节（未经压缩的长度）。        一次最大可读入 8192 个未压缩的字节。       </p>      </dd>          </dl>    </span>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.bzread-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回解压的数据，在错误时返回 <strong><span>FALSE</span></strong>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.bzread-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-698">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">bzread()</strong></span> 范例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"/tmp/foo.bz2"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$bz&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">bzopen</span><span style="color: #007700">(</span><span style="color: #9876AA">$file</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"r"</span><span style="color: #007700">)&nbsp;or&nbsp;die(</span><span style="color: #DD0000">"Couldn't&nbsp;open&nbsp;</span><span style="color: #9876AA">$file</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">$decompressed_file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />while&nbsp;(!</span><span style="color: #9876AA">feof</span><span style="color: #007700">(</span><span style="color: #9876AA">$bz</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;</span><span style="color: #9876AA">$decompressed_file&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #9876AA">bzread</span><span style="color: #007700">(</span><span style="color: #9876AA">$bz</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">4096</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">bzclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$bz</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #DD0000">"The&nbsp;contents&nbsp;of&nbsp;</span><span style="color: #9876AA">$file</span><span style="color: #DD0000">&nbsp;are:&nbsp;&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #9876AA">$decompressed_file</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.bzread-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link bzwrite()} - 二进制安全地写入 bzip2 文件</span></li>     <li class="member"><span class="function">{@link feof()} - 测试文件指针是否到了文件结束的位置</span></li>     <li class="member"><span class="function">{@link bzopen()} - 打开 bzip2 压缩文件</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.bzip2.php">Bzip2 函数</a></div></div>
 * @return string the uncompressed data, or <b>FALSE</b> on error.*/
function bzread ($bz, $length = 1024) {}

/**
*<div id="function.bzwrite" class="refentry">  <div class="refnamediv">   <h1 class="refname">bzwrite</h1>   <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bzwrite</span> &mdash; <span class="dc-title">二进制安全地写入 bzip2 文件</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.bzwrite-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>bzwrite</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$bz</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$data</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$length</span></span>   ] )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">bzwrite()</strong></span> 把字符串（string）写入了指定的 bzip2 文件流。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.bzwrite-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">bz</span></dt>       <dd>        <p class="para">        文件指针。它必须是有效的并且指向 <span class="function">{@link bzopen()}</span> 成功打开的文件。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">data</span></dt>       <dd>        <p class="para">        要写入的数据。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">length</span></dt>       <dd>        <p class="para">        如果提供了这个参数，将仅仅写入 <span class="parameter" style="color:#2EACF9">length</span>（未压缩）个字节，若 <span class="parameter" style="color:#2EACF9">data</span> 小于该指定的长度则写入全部数据。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.bzwrite-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回写入的数据字节数，错误时返回 <strong><span>FALSE</span></strong>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.bzwrite-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-699">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">bzwrite()</strong></span> 范例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$str&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"uncompressed&nbsp;data"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$bz&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">bzopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"/tmp/foo.bz2"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"w"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">bzwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$bz</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #9876AA">$str</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">bzclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$bz</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.bzwrite-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link bzread()} - bzip2 文件二进制安全地读取</span></li>     <li class="member"><span class="function">{@link bzopen()} - 打开 bzip2 压缩文件</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.bzip2.php">Bzip2 函数</a></div></div>
 * @return int the number of bytes written, or <b>FALSE</b> on error.*/
function bzwrite ($bz, $data, $length = null) {}

/**
*<div id="function.bzflush" class="refentry">  <div class="refnamediv">   <h1 class="refname">bzflush</h1>   <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bzflush</span> &mdash; <span class="dc-title">强制写入所有写缓冲区的数据</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.bzflush-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>bzflush</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$bz</span></span>    )</div>    <p class="para rdfs-comment">    强制写入 bzip2 文件指针 <span class="parameter" style="color:#2EACF9">bz</span> 的所有写缓冲数据。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.bzflush-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">bz</span></dt>       <dd>        <p class="para">        文件指针。它必须是有效的并且指向 <span class="function">{@link bzopen()}</span> 成功打开的文件。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.bzflush-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.bzflush-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link bzread()} - bzip2 文件二进制安全地读取</span></li>     <li class="member"><span class="function">{@link bzwrite()} - 二进制安全地写入 bzip2 文件</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.bzip2.php">Bzip2 函数</a></div></div>
 * @return int <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function bzflush ($bz) {}

/**
*<div id="function.bzclose" class="refentry">  <div class="refnamediv">   <h1 class="refname">bzclose</h1>   <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bzclose</span> &mdash; <span class="dc-title">关闭一个 bzip2 文件</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.bzclose-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>bzclose</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$bz</span></span>    )</div>    <p class="para rdfs-comment">    关闭给出的 bzip2 文件指针。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.bzclose-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">bz</span></dt>       <dd>        <p class="para">        文件指针。它必须是有效的并且指向 <span class="function">{@link bzopen()}</span> 成功打开的文件。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.bzclose-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.bzclose-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link bzopen()} - 打开 bzip2 压缩文件</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.bzip2.php">Bzip2 函数</a></div></div>
 * @return int <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function bzclose ($bz) {}

/**
*<div id="function.bzerrno" class="refentry">  <div class="refnamediv">   <h1 class="refname">bzerrno</h1>   <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bzerrno</span> &mdash; <span class="dc-title">返回一个 bzip2 错误码</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.bzerrno-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>bzerrno</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$bz</span></span>    )</div>    <p class="para rdfs-comment">    返回指定文件指针任意返回的 bzip2 错误的错误码。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.bzerrno-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">bz</span></dt>       <dd>        <p class="para">        文件指针。它必须是有效的并且指向 <span class="function">{@link bzopen()}</span> 成功打开的文件。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.bzerrno-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回 integer 的错误码。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.bzerrno-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link bzerror()} - 返回包含 bzip2 错误号和错误字符串的一个 array</span></li>     <li class="member"><span class="function">{@link bzerrstr()} - 返回一个 bzip2 的错误字符串</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.bzip2.php">Bzip2 函数</a></div></div>
 * @return int the error number as an integer.*/
function bzerrno ($bz) {}

/**
*<div id="function.bzerrstr" class="refentry">  <div class="refnamediv">   <h1 class="refname">bzerrstr</h1>   <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bzerrstr</span> &mdash; <span class="dc-title">返回一个 bzip2 的错误字符串</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.bzerrstr-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><strong>bzerrstr</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$bz</span></span>    )</div>    <p class="para rdfs-comment">    获取指定文件指针中返回 bzip2 任何错误的错误字符串。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.bzerrstr-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">bz</span></dt>       <dd>        <p class="para">        文件指针。它必须是有效的并且指向 <span class="function">{@link bzopen()}</span> 成功打开的文件。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.bzerrstr-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回包含错误信息的 string。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.bzerrstr-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link bzerrno()} - 返回一个 bzip2 错误码</span></li>     <li class="member"><span class="function">{@link bzerror()} - 返回包含 bzip2 错误号和错误字符串的一个 array</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.bzip2.php">Bzip2 函数</a></div></div>
 * @return string a string containing the error message.*/
function bzerrstr ($bz) {}

/**
*<div id="function.bzerror" class="refentry">  <div class="refnamediv">   <h1 class="refname">bzerror</h1>   <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bzerror</span> &mdash; <span class="dc-title">    返回包含 bzip2 错误号和错误字符串的一个 array   </span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.bzerror-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>bzerror</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$bz</span></span>    )</div>    <p class="para rdfs-comment">    返回文件指针中返回的 bzip2 错误的错误号和错误字符串。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.bzerror-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">bz</span></dt>       <dd>        <p class="para">        文件指针。它必须是有效的并且指向 <span class="function">{@link bzopen()}</span> 成功打开的文件。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.bzerror-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回一个关联数组，包含错误码于 <em>errno</em> 条目，    以及错误信息于 <em>errstr</em> 条目。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.bzerror-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-696">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">bzerror()</strong></span> 范例</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$error&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">bzerror</span><span style="color: #007700">(</span><span style="color: #9876AA">$bz</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">[</span><span style="color: #DD0000">"errno"</span><span style="color: #007700">];<br />echo&nbsp;</span><span style="color: #9876AA">$error</span><span style="color: #007700">[</span><span style="color: #DD0000">"errstr"</span><span style="color: #007700">];<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.bzerror-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link bzerrno()} - 返回一个 bzip2 错误码</span></li>     <li class="member"><span class="function">{@link bzerrstr()} - 返回一个 bzip2 的错误字符串</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.bzip2.php">Bzip2 函数</a></div></div>
 * @return array an associative array, with the error code in the*/
function bzerror ($bz) {}

/**
*<div id="function.bzcompress" class="refentry">  <div class="refnamediv">   <h1 class="refname">bzcompress</h1>   <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bzcompress</span> &mdash; <span class="dc-title">把一个字符串压缩成 bzip2 编码数据</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.bzcompress-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>bzcompress</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$source</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$blocksize</span><span class="initializer"> = 4</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$workfactor</span><span class="initializer"> = 0</span></span>   ]] )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">bzcompress()</strong></span> 压缩了指定的字符串并以 bzip2 编码返回数据。    </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.bzcompress-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">source</span></dt>       <dd>        <p class="para">        待压缩的字符串。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">blocksize</span></dt>       <dd>        <p class="para">        指定压缩时使用的块大小，应该是一个 1-9 的数字。9 可以有最高的压缩比，但会使用更多的资源。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">workfactor</span></dt>       <dd>        <p class="para">        控制压缩阶段出现最坏的重复性高的情况下输入数据时的行为。        该值可以是在 0 至 250 之间，0是一个特殊的情况。       </p>       <p class="para">        无论 <span class="parameter" style="color:#2EACF9">workfactor</span>是什么，产生的输出都是一致的。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.bzcompress-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    压缩后的字符串，或者在出现错误时返回错误号。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.bzcompress-examples">   <h3 class="title">范例</h3>   <div class="example" id="example-694">    <p><strong>Example #1 压缩数据</strong></p>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$str&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"sample&nbsp;data"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$bzstr&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">bzcompress</span><span style="color: #007700">(</span><span style="color: #9876AA">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">9</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">$bzstr</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>    </div>     </div>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.bzcompress-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link bzdecompress()} - 解压经 bzip2 编码过的数据</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.bzip2.php">Bzip2 函数</a></div></div>
 * @return mixed The compressed string, or an error number if an error occurred.*/
function bzcompress ($source, $blocksize = 4, $workfactor = 0) {}

/**
*<div id="function.bzdecompress" class="refentry">  <div class="refnamediv">   <h1 class="refname">bzdecompress</h1>   <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">bzdecompress</span> &mdash; <span class="dc-title">解压经 bzip2 编码过的数据</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.bzdecompress-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>bzdecompress</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$source</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$small</span><span class="initializer"> = 0</span></span>   ] )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">bzdecompress()</strong></span> 解压了包含 bzip2 压缩数据的指定字符串。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.bzdecompress-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">source</span></dt>       <dd>        <p class="para">        要解压的字符串。       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">small</span></dt>       <dd>        <p class="para">        如果为 <strong><span>TRUE</span></strong>，将会使用一种内存开销更小的替代算法（最大内存需求降低至大约 2300K）但速度会降低约一半。       </p>       <p class="para">        寻找该功能的更多信息可参见 <a href="http://www.bzip.org/" class="link external">&raquo;&nbsp;bzip2 文档</a>。       </p>      </dd>          </dl>    </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.bzdecompress-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    解压后的字符串，如果发生了一个错误则返回一个错误码。   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.bzdecompress-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-695">     <p><strong>Example #1 解压一个字符串</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$start_str&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"This&nbsp;is&nbsp;not&nbsp;an&nbsp;honest&nbsp;face?"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$bzstr&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">bzcompress</span><span style="color: #007700">(</span><span style="color: #9876AA">$start_str</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #DD0000">"Compressed&nbsp;String:&nbsp;"</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #9876AA">$bzstr</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #DD0000">"\n&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">$str&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">bzdecompress</span><span style="color: #007700">(</span><span style="color: #9876AA">$bzstr</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #DD0000">"Decompressed&nbsp;String:&nbsp;"</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #9876AA">$str</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #DD0000">"\n&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.bzdecompress-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link bzcompress()} - 把一个字符串压缩成 bzip2 编码数据</span></li>    </ul>   </span>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.bzip2.php">Bzip2 函数</a></div></div>
 * @return mixed The decompressed string, or an error number if an error occurred.*/
function bzdecompress ($source, $small = 0) {}
