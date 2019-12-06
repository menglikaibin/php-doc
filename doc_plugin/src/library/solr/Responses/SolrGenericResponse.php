<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrgenericresponse" class="reference">   <h1 class="title">The SolrGenericResponse class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrgenericresponse.intro">    <h2 class="title">简介</h2>    <p class="para">    Represents a response from the solr server.    </p>   </div>     <div class="section" id="solrgenericresponse.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">final</span>       <strong class="classname">SolrGenericResponse</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.solrresponse.php" class="classname">SolrResponse</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrgenericresponse.php#solrgenericresponse.constants.parse-solr-obj"><var class="varname">PARSE_SOLR_OBJ</var></a></var>      <span class="initializer"> = 0</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrgenericresponse.php#solrgenericresponse.constants.parse-solr-doc"><var class="varname">PARSE_SOLR_DOC</var></a></var>      <span class="initializer"> = 1</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">SolrResponse::PARSE_SOLR_OBJ</var>}</var>      <span class="initializer"> = 0</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname">{@link <var class="varname">SolrResponse::PARSE_SOLR_DOC</var>}</var>      <span class="initializer"> = 1</span>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-status">$<var class="varname">http_status</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.parser-mode">$<var class="varname">parser_mode</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">bool</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.success">$<var class="varname">success</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-status-message">$<var class="varname">http_status_message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-request-url">$<var class="varname">http_request_url</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-request-headers">$<var class="varname">http_raw_request_headers</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-request">$<var class="varname">http_raw_request</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-response-headers">$<var class="varname">http_raw_response_headers</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-response">$<var class="varname">http_raw_response</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type" style="color:#EAB766">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-digested-response">$<var class="varname">http_digested_response</var></a></var>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrgenericresponse.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrgenericresponse.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>     ( <span class="methodparam">void</span>    )</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getDigestedResponse}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getHttpStatus}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getHttpStatusMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawRequest}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawRequestHeaders}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawResponse}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawResponseHeaders}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRequestUrl}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrObject</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getResponse}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::setParseMode}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$parser_mode</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::success}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>        <div class="section" id="solrgenericresponse.constants">    <h2 class="title">预定义常量</h2>    <div class="section" id="solrgenericresponse.constants.types">     <h2 class="title">SolrGenericResponse Class constants</h2>     <dl>               <dt id="solrgenericresponse.constants.parse-solr-obj"><strong><span>SolrGenericResponse::PARSE_SOLR_OBJ</span></strong></dt>        <dd>         <p class="para">Documents should be parsed as SolrObject instances</p>       </dd>                     <dt id="solrgenericresponse.constants.parse-solr-doc"><strong><span>SolrGenericResponse::PARSE_SOLR_DOC</span></strong></dt>        <dd>         <p class="para">Documents should be parsed as SolrDocument instances.</p>       </dd>             </dl>     </div>   </div>     </div>                   <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrGenericResponse::__construct} — Constructor</li><li>{@link SolrGenericResponse::__destruct} — Destructor</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
final class SolrGenericResponse extends SolrResponse {

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * SolrGenericResponse constructor.
	 * @link http://php.net/manual/en/solrgenericresponse.construct.php
	 */
	public function __construct() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Destructor
	 * @link http://php.net/manual/en/solrgenericresponse.destruct.php
	 */
	public function __destruct() {}

}