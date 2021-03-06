/*
 * Copyright (c) (2017) - Aikar's Minecraft Timings Parser
 *
 *  Written by Aikar <aikar@aikar.co>
 *    + Contributors (See AUTHORS)
 *
 *  http://aikar.co
 *  http://starlis.com
 *
 *  @license MIT
 *
 */

import React from "react";

import ServerInfo from "./ServerInfo";
import HistorySelector from "./HistorySelector";

export default function ContentTop() {
  return <div id="content-top" className="row-double">
    <ServerInfo/>
    <HistorySelector/>
  </div>;
}
