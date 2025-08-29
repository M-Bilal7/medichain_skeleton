// SPDX-License-Identifier: MIT
pragma solidity ^0.8.0;
contract MediAnchor {
  event Anchored(bytes32 indexed recordHash, uint256 timestamp, uint256 patientId);
  function anchor(bytes32 recordHash, uint256 patientId) external {
    emit Anchored(recordHash, block.timestamp, patientId);
  }
}
