package com.trassion.newstop.dao;

import java.util.List;
import java.util.Map;

import android.content.ContentValues;

import com.trassion.newstop.bean.ChannelItem;

public interface ChannelDaoInface {
    public boolean addCache(ChannelItem item);
    
    public boolean deleteCache(String whereClause,String[] whereArgs);
    
    public boolean updateCache(ContentValues values,String whereClause,String[] whereArgs);
    
    public Map<String,String>viewCache(String selection,String[] selectionArgs);
    
    public List<Map<String,String>>listCache(String selection,String[] selectionArgs);
    
    public void clearFeedTable();
}
