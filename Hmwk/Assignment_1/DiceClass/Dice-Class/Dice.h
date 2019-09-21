/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * File:   Dice.h
 * Author: jt2603099
 *
 * Created on September 19, 2019, 4:33 PM
 */

#ifndef DICE_H
#define DICE_H

#include <string>

using namespace std;


class Dice {
private:
    int    rollNum;
    int    value;
    int    maxRolls = 0;
    string name;
    string picture;
    string url;
    void setName();
    void setPicture();
    void setValue();
public:
    Dice(int rollNum);
    string getName() {
        return name; }
    string getPicture() {
        return picture; }
    string toHTML();

};

#endif /* DICE_H */

