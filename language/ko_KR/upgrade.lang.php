<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2014 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['Only administrator can run upgrade: please sign in below.'] = '관리자만 업그레이드를 수행 할 수 있습니다: 로그인하십시오.';
$lang['SQL queries'] = 'SQL 쿼리';
$lang['Statistics'] = '통계';
$lang['Upgrade'] = '업그레이드';
$lang['Upgrade from version %s to %s'] = '버전 %s에서 %s로 업그레이드';
$lang['Upgrade informations'] = '업그레이드 정보';
$lang['You do not have access rights to run upgrade'] = '업그레이드를 수행 할 권한이 없습니다';
$lang['total SQL time'] = '총 SQL 수행시간';
$lang['total upgrade time'] = '총 업그레이드 수행시간';
$lang['This page proposes to upgrade your database corresponding to your old version of Piwigo to the current version. The upgrade assistant thinks you are currently running a <strong>release %s</strong> (or equivalent).'] = '이 페이지는 이전 버전의 Piwigo에서 새 버전으로 데이터베이스로 업그레이드할 것을 제안합니다. 업그레이드 도우미가 <strong>정식 버전 %s</strong> (또는 유사한 버전)이 동작 중인 것으로 확인됩니다.';
$lang['Perform a maintenance check in [Administration>Tools>Maintenance] if you encounter any problem.'] = '문제가 발생하었다면 [관리>도구>유지보수]에서 유지보수 점검을 실행하십시오.';
$lang['User permissions and group permissions have been erased'] = '사용자와 그룹의 권한이 제거됨';
$lang['Only thumbnails prefix and webmaster mail address have been saved from previous configuration'] = '이전 환경설정에서 썸네일의 접두어와 웹마스터의 메일 주소만 저장되었습니다';
$lang['As a precaution, following plugins have been deactivated. You must check for plugins upgrade before reactiving them:'] = '예방을 위해서 다음의 플러그인들이 비활성화되었습니다. 플러그인들을 재활성화하기 전에 업그레이드할 수 있는지 확인해야 합니다:';
$lang['As a precaution, following themes have been deactivated. You must check for themes upgrade before reactiving them:'] = '예방을 위해서 다음의 테마들이 비활성화되었습니다. 테마들을 재활성화하기 전에 업그레이드할 수 있는지 확인해야 합니다:';
$lang['All sub-albums of private albums become private'] = '비공개 앨범의 모든 하위 앨범들은 비공개가 됩니다';