<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrpingresponse" class="reference">   <h1 class="title">The SolrPingResponse class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrpingresponse.intro">    <h2 class="title">简介</h2>    <p class="para">     Represents a response to a ping request to the server    </p>   </div>     <div class="section" id="solrpingresponse.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">final</span>       <strong class="classname">SolrPingResponse</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.solrresponse.php" class="classname">SolrResponse</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrpingresponse.php#solrpingresponse.constants.parse-solr-obj"><var class="varname">PARSE_SOLR_OBJ</var></a></var>      <span class="initializer"> = 0</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrpingresponse.php#solrpingresponse.constants.parse-solr-doc"><var class="varname">PARSE_SOLR_DOC</var></a></var>      <span class="initializer"> = 1</span>     ;</div>       <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrpingresponse.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">void</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrpingresponse.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/solrpingresponse.getresponse.php" class="methodname" style="color:#CC7832">getResponse</a></span>     ( <span class="methodparam">void</span>    )</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getDigestedResponse}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getHttpStatus}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getHttpStatusMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawRequest}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawRequestHeaders}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawResponse}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawResponseHeaders}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">string</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRequestUrl}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">SolrObject</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getResponse}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::setParseMode}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$parser_mode</span><span class="initializer"> = 0</span></span>   ] )</div> <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::success}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>        <div class="section" id="solrpingresponse.props">    <h2 class="title">属性</h2>    <dl>            <dt id="solrpingresponse.props.http-status"><var class="varname"><var class="varname">http_status</var></var></dt>       <dd>        <p class="para">The http status of the response.</p>      </dd>                 <dt id="solrpingresponse.props.parser-mode"><var class="varname"><var class="varname">parser_mode</var></var></dt>       <dd>        <p class="para">Whether to parse the solr documents as SolrObject or SolrDocument instances.</p>      </dd>                 <dt id="solrpingresponse.props.success"><var class="varname"><var class="varname">success</var></var></dt>       <dd>        <p class="para">Was there an error during the request</p>      </dd>                 <dt id="solrpingresponse.props.http-status-message"><var class="varname"><var class="varname">http_status_message</var></var></dt>       <dd>        <p class="para">Detailed message on http status</p>      </dd>                 <dt id="solrpingresponse.props.http-request-url"><var class="varname"><var class="varname">http_request_url</var></var></dt>       <dd>        <p class="para">The request URL</p>      </dd>                 <dt id="solrpingresponse.props.http-raw-request-headers"><var class="varname"><var class="varname">http_raw_request_headers</var></var></dt>       <dd>        <p class="para">A string of raw headers sent during the request</p>      </dd>                 <dt id="solrpingresponse.props.http-raw-request"><var class="varname"><var class="varname">http_raw_request</var></var></dt>       <dd>        <p class="para">The raw request sent to the server</p>      </dd>                 <dt id="solrpingresponse.props.http-raw-response-headers"><var class="varname"><var class="varname">http_raw_response_headers</var></var></dt>       <dd>        <p class="para">Response headers from the Solr server</p>      </dd>                 <dt id="solrpingresponse.props.http-raw-response"><var class="varname"><var class="varname">http_raw_response</var></var></dt>       <dd>        <p class="para">The response message from the server</p>      </dd>                 <dt id="solrpingresponse.props.http-digested-response"><var class="varname"><var class="varname">http_digested_response</var></var></dt>       <dd>        <p class="para">The response in PHP serialized format.</p>      </dd>          </dl>    </div>         <div class="section" id="solrpingresponse.constants">    <h2 class="title">预定义常量</h2>    <div class="section" id="solrpingresponse.constants.types">     <h2 class="title">SolrPingResponse Class Constants</h2>     <dl>               <dt id="solrpingresponse.constants.parse-solr-obj"><strong><span>SolrPingResponse::PARSE_SOLR_OBJ</span></strong></dt>        <dd>         <p class="para">Documents should be parsed as SolrObject instances</p>       </dd>                     <dt id="solrpingresponse.constants.parse-solr-doc"><strong><span>SolrPingResponse::PARSE_SOLR_DOC</span></strong></dt>        <dd>         <p class="para">Documents should be parsed as SolrDocument instances.</p>       </dd>             </dl>     </div>   </div>     </div>                          <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrPingResponse::__construct} — Constructor</li><li>{@link SolrPingResponse::__destruct} — Destructor</li><li>{@link SolrPingResponse::getResponse} — Returns the response from the server</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
final class SolrPingResponse extends SolrResponse {

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * SolrPingResponse constructor.
	 * @link http://php.net/manual/en/solrpingresponse.construct.php
	 */
	public function __construct() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Destructor
	 * @link http://php.net/manual/en/solrpingresponse.destruct.php
	 */
	public function __destruct() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the response from the server
	 * @link http://php.net/manual/en/solrpingresponse.getresponse.php
	 * @return string <p>
	 * Returns an empty string. (Returns the response from the server. This should be empty because the request as a
	 * HEAD request.)
	 * </p>
	 */
	public function getResponse() {}

}